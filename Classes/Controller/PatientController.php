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

/**
 * PatientController
 */

use TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter;

class PatientController extends AbstractAccountingSystemController
{
    /**
     * patientRepository
     *
     * @var \CodeID\AccountingSystem\Domain\Repository\PatientRepository
     * @inject
     */
    protected $patientRepository = null;

    /**
     * @return void
     */
    public function initializeAction()
    {
        parent::initializeAction();

        if (isset($this->arguments['patient'])) {
            $this->arguments['patient']
                ->getPropertyMappingConfiguration()
                ->forProperty('birthDate')
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
        $patients = $this->patientRepository->findAll();
        $this->view->assign('patients', $patients);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function createAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->patientRepository->add($patient);
        $this->redirect('list');
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @ignorevalidation $patient
     * @return void
     */
    public function editAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->view->assign('serviceProvider', $this->getFrontendUserData()['uid']);
        $this->view->assign('patient', $patient);
    }

    /**
     * action update
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function updateAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->patientRepository->update($patient);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function deleteAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->patientRepository->remove($patient);
        $this->redirect('list');
    }
}
