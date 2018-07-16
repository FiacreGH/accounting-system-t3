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

use TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter;

/**
 * ConsultationController
 */
class ConsultationController extends AbstractAccountingSystemController
{
    /**
     * consultationRepository
     *
     * @var \CodeID\AccountingSystem\Domain\Repository\ConsultationRepository
     * @inject
     */
    protected $consultationRepository = null;

    /**
     * @return void
     */
    public function initializeAction()
    {
        parent::initializeAction();

        if (isset($this->arguments['consultation'])) {
            $this->arguments['consultation']
                ->getPropertyMappingConfiguration()
                ->forProperty('date')
                ->setTypeConverterOption(
                    DateTimeConverter::class,
                    DateTimeConverter::CONFIGURATION_DATE_FORMAT,
                    'Y-m-d'
                );

        }
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $consultations = $this->consultationRepository->findByServiceProvider($this->getFrontendUserData()['uid']);
        $this->view->assign('consultations', $consultations);
    }

    /**
     * action show
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function showAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->view->assign('consultation', $consultation);
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function newAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->view->assign('patient', $patient);
    }

    /**
     * action create
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function createAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $consultation->setServiceProvider($this->getFrontendUserData()['uid']);
        $this->consultationRepository->add($consultation);
        $this->redirect('edit', 'Patient', 'AccountingSystem', ['patient' => $consultation->getPatient()]);
    }

    /**
     * action edit
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @ignorevalidation $consultation
     * @return void
     */
    public function editAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation,
                               \CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->view->assign('consultation', $consultation);
        $this->view->assign('patient', $patient);
    }

    /**
     * action update
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function updateAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $consultation->setServiceProvider($this->getFrontendUserData()['uid']);
        $this->consultationRepository->update($consultation);
        $this->redirect('edit', 'Patient', 'AccountingSystem', ['patient' => $consultation->getPatient()]);
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     *
     * @return void
     */
    public function deleteAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->consultationRepository->remove($consultation);
        $this->redirect('edit', 'Patient', 'AccountingSystem', ['patient' => $consultation->getPatient()]);
    }
}
