<?php

namespace CodeID\AccountingSystem\Controller;

/***
 *
 * This file is part of the "Accounting System" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Fiacre Sankara <fiacre.sankara@gmail.com>, CodeID
 *
 ***/

use CodeID\AccountingSystem\Domain\Model\Consultation;
use CodeID\AccountingSystem\Domain\Model\Invoice;

/**
 * InvoiceController
 */
class InvoiceController extends AbstractAccountingSystemController
{
    const BASE_INVOICE_DIRECTORY = 'fileadmin/invoices';
    /**
     * consultationRepository
     *
     * @var \CodeID\AccountingSystem\Domain\Repository\ConsultationRepository
     * @inject
     */
    protected $consultationRepository = null;

    /**
     * invoiceRepository
     *
     * @var \CodeID\AccountingSystem\Domain\Repository\InvoiceRepository
     * @inject
     */
    protected $invoiceRepository = null;
    /**
     * patientRepository
     *
     * @var \CodeID\AccountingSystem\Domain\Repository\PatientRepository
     * @inject
     */
    protected $patientRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $invoice = $this->invoiceRepository->findByServiceProvider($this->getFrontendUserData()['uid']);
        $this->view->assign('invoice', $invoice);
    }

    /**
     * @param Invoice $invoice
     * @return void
     */
    public function newAction(Invoice $invoice)
    {
        $this->view->assign('invoice', $invoice);
    }

    /**
     * action create
     * @param array $consultations
     * @return void
     */
    public function createAction(array $consultations)
    {
        /** @var Consultation $consultationObject */
        $consultationObject = $this->objectManager->get(Consultation::class); // $consultationObject must exist

        /** @var Invoice $invoice */
        $invoice = $this->objectManager->get(Invoice::class);
        $totalAmount = 0;
        $firstDate = null;
        $lastDate = null;
        foreach ($consultations as $consultation) {

            /** @var Consultation $consultationObject */
            $consultationObject = $this->consultationRepository->findByIdentifier($consultation);

            if ($consultationObject) {

                $consultationObject->setIsInvoiced(true);
                $this->consultationRepository->update($consultationObject);

                $invoice->addConsultation($consultationObject);
                $totalAmount += $consultationObject->getAmount();

                if ($firstDate === null) { // || $firstDate > $consultationObject->getDate()
                    $firstDate = $consultationObject->getDate();
                }
                $lastDate = $consultationObject->getDate();
            }
        }

        $this->view->assign('firstDate', $firstDate->format('d.m.Y'));
        $this->view->assign('lastDate', $lastDate->format('d.m.Y'));
        $this->view->assign('invoice', $invoice);
        $this->view->assign('patient', $consultationObject->getPatient());
        $this->view->assign('totalAmount', $totalAmount);
        $this->view->assign('reason', $consultationObject->getReason());
        $this->view->assign('currentDate', date('d.m.Y H:i:s', time()));
        $this->view->assign('currentDateShort', date('d.m.Y', time()));
        $this->view->assign('currentTstamp', date(time()));
        $this->view->assign('user', $this->getFrontendUserData());

        $content = $this->view->render();

        // phase 2: sauvegarder le html dans un ficher typo3temp/tx_accounting_system/invoice.time().html
        $instantTime = date(time());
        $invoiceFileNameWithoutExtension = 'invoice' . $instantTime;
        $temporaryDirectory = PATH_site . 'typo3temp/tx_accounting_system';
        if (!is_dir($temporaryDirectory)) {
            mkdir($temporaryDirectory);
        }
        $targetDirectory = PATH_site . InvoiceController::BASE_INVOICE_DIRECTORY;
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory);
        }

        $invoiceFileName = $invoiceFileNameWithoutExtension . '.pdf';
        $temporaryHtmlFileNameAndPath = $temporaryDirectory . DIRECTORY_SEPARATOR . $invoiceFileNameWithoutExtension . '.html';
        file_put_contents($temporaryHtmlFileNameAndPath, $content);

        $targetPdfFileNameAndPath = $targetDirectory . DIRECTORY_SEPARATOR . $invoiceFileName;

        // phase 3: convertier le html en pdf via la commande  (cf. note Whatsapp de la semaine dernière)
        exec($this->settings['wkhtmltopdfBinaryAndPath'] . ' ' . $temporaryHtmlFileNameAndPath . ' ' . $targetPdfFileNameAndPath);
        unlink($temporaryHtmlFileNameAndPath);
        $invoice->setInvoiceFileName($invoiceFileName);
        $invoice->setAmount($totalAmount);
        $invoice->setDate(date('Y-m-d H:i:s', time()));
        $invoice->setInvoiceId($instantTime);
        $invoice->setServiceProvider($this->getFrontendUserData()['uid']);

        $invoice->setPatient($consultationObject->getPatient());
        $this->invoiceRepository->add($invoice);
        $this->redirect('edit', 'Patient', 'AccountingSystem', ['patient' => $consultationObject->getPatient()]);

    }

    /**
     * @param Invoice $invoice
     *
     * @return void
     */
    public function deleteAction(Invoice $invoice)
    {
        foreach ($invoice->getConsultations() as $consultation) {
            $consultation->setIsInvoiced(false);
            $this->consultationRepository->update($consultation);
        }
        $this->invoiceRepository->remove($invoice);
        $targetDirectory = PATH_site . InvoiceController::BASE_INVOICE_DIRECTORY;
        unlink($targetDirectory . '/' . $invoice->getInvoiceFileName());
        $this->redirect('edit', 'Patient', 'AccountingSystem', ['patient' => $invoice->getPatient()]);
    }
}
