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

use CodeID\AccountingSystem\Domain\Model\Invoice;

/**
 * AccountingController
 */
class AccountingController extends AbstractAccountingSystemController
{
    const DATE_BEGIN = 2018 ;

    /**
     * @var \CodeID\AccountingSystem\Domain\Repository\ConsultationRepository
     * @inject
     */
    protected $consultationRepository = null;

    /**
     * @var \CodeID\AccountingSystem\Domain\Repository\InvoiceRepository
     * @inject
     */
    protected $invoiceRepository = null;

    /**
     * @var \CodeID\AccountingSystem\Domain\Repository\PatientRepository
     * @inject
     */
    protected $patientRepository = null;

    /**
     * @param string $month
     * @param int $year
     * @validate $month \CodeID\AccountingSystem\Domain\Validator\MonthValidator
     * @validate $year \CodeID\AccountingSystem\Domain\Validator\YearValidator
     * @return void
     */
    public function monthlyAccountingAction($month = '', $year = 0) // tx_accountingsystem_accountin[month]=01
    {
        // replace class: 'accounting-button btn btn-primary' -> class="accounting-button btn btn-primary"
        if (!$month) {
            $month = $formattedMonth = str_pad(date("m"), 2, '0', STR_PAD_LEFT);
        }
        if (!$year) {
            $year = date("Y");
        }

        $dateBegin = $year . '-' . $month . '-00';
        $dateEnd = $year . '-' . $month . '-' . cal_days_in_month(CAL_GREGORIAN, $month, $year);
        setlocale(LC_MONETARY, "fr_CH");
        $this->view->assign('serviceProvider', $this->getFrontendUserData()['first_name'] . ' ' . $this->getFrontendUserData()['last_name']);

        $totalInvoices = $this->invoiceRepository->findByServiceProvider($this->getFrontendUserData()['uid']);
        $this->view->assign('totalNumberOfInvoices', count($totalInvoices));

        $totalNumberOfConsultations = $this->consultationRepository->countByServiceProvider($this->getFrontendUserData()['uid']);
        $this->view->assign('totalNumberOfConsultations', $totalNumberOfConsultations);

        $totalNumberOfPatients = $this->patientRepository->findAll();
        $this->view->assign('totalNumberOfPatients', count($totalNumberOfPatients));

        $invoices = $this->invoiceRepository->findByServiceProviderAndDateInterval($this->getFrontendUserData()['uid'], $dateBegin, $dateEnd);
        $consultations = $this->consultationRepository->findByServiceProviderAndDateInterval($this->getFrontendUserData()['uid'], $dateBegin, $dateEnd);

        $expectedAmount= 0;
        foreach ($consultations as $consultation) {
            /** @var Invoice $invoice */
            $expectedAmount += $consultation->getAmount();
        }
        $this->view->assign('expectedAmount', money_format("%i", $expectedAmount));

        $this->view->assign('numberOfInvoices', count($invoices));
        $this->view->assign('numberOfTotalConsultations', count($consultations));

        $numberOfConsultations = 0;
        foreach ($invoices as $invoice) {
            /** @var Invoice $invoice */
            $numberOfConsultations += $invoice->getConsultations()->count();
        }
        $this->view->assign('numberOfInvoicedConsultations', $numberOfConsultations);
        $this->view->assign('numberOfNotInvoicedConsultations', (count($consultations) - $numberOfConsultations));

        $patientsArray = [];
        foreach ($consultations as $consultation) {
            array_push($patientsArray, $consultation->getPatient());
        }
        $distinctPatientsArray = array_unique($patientsArray);
        $this->view->assign('numberOfPatients', count($distinctPatientsArray));

        $invoicesAmount = 0;
        foreach ($invoices as $invoice) {
            $invoicesAmount += $invoice->getAmount();
        }
        $invoicesAmount = money_format("%i", $invoicesAmount);
        $this->view->assign('invoicesAmount', $invoicesAmount);

        $totalInvoicesAmount = 0;
        foreach ($totalInvoices as $invoice) {
            /** @var Invoice $invoice */
            $totalInvoicesAmount += $invoice->getAmount();
        }
        $totalInvoicesAmount = money_format("%i", $totalInvoicesAmount);
        $this->view->assign('totalInvoicesAmount', $totalInvoicesAmount);

        $months = [];
        for ($count = 1; $count <= 12; $count++) {
            $formattedMonth = str_pad($count, 2, '0', STR_PAD_LEFT);
            $months[$formattedMonth] = $formattedMonth;
        }

        $this->view->assign('years', $this->getYearsList(AccountingController::DATE_BEGIN));
        $this->view->assign('months', $months);
        $this->view->assign('currentMonth', $month);
        $this->view->assign('currentYear', $year);
    }

    /**
     * action monthtly Accounting
     *
     * @return void
     */
    public function annuallyAccountingAction()
    {
        setlocale(LC_MONETARY, "fr_CH");
        $summaries = [];
        foreach ($this->getYearsList(AccountingController::DATE_BEGIN) as $year) {

            $invoices = $this->invoiceRepository->findByServiceProviderAndYear($this->getFrontendUserData()['uid'], $year);

            $amount = $numberOfConsultations = 0;
            $patients = [];
            foreach ($invoices as $invoice) {
                /** @var Invoice $invoice */
                $amount += $invoice->getAmount();
                $patients[$invoice->getPatient()->getUid()] = null;
                $numberOfConsultations += $invoice->getConsultations()->count();
            }

            $summaries[] = [
                'year' => $year,
                'amount' => money_format("%i", $amount),
                'numberOfPatients' => count($patients),
                'numberOfInvoices' => $invoices->count(),
                'numberOfConsultations' => $numberOfConsultations,
            ];

        }

        $this->view->assign('summaries', $summaries);
        $this->view->assign('serviceProvider', $this->getFrontendUserData()['first_name'] . ' ' . $this->getFrontendUserData()['last_name']);
    }

    /**
     * @param int $yearBegin
     * @return array
     */
    protected function getYearsList($yearBegin)
    {
        $yearsList = [];
        $currentYear = date('Y');
        for ($year = $currentYear; $year >= $yearBegin; $year--) {
            $yearsList[(int)$year] = (int)$year;
        }
        return $yearsList;
    }
}
