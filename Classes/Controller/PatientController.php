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
class PatientController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        if (!$this->getFrontendUserData()) {

            throw new \RuntimeException('Error: user must be logged in!', 1524814048);

        }
    }

    /**
     * @return void
     */
    public
    function initializeCreateAction()
    {
        if (isset($this->arguments['newPatient'])) {
            $this->arguments['newPatient']
                ->getPropertyMappingConfiguration()
                ->forProperty('birthDate')
                ->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter',
                    \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'd.m.Y H:i:s');
        }
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $patients = $this->patientRepository->findAllBySearchTerm($searchTerm = '');
        $this->view->assignMultiple([
            'patients' => $patients,
            'searchTerm' => $searchTerm
        ]);
    }

    /**
     * action show
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function showAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->view->assign('patient', $patient);
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
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $newPatient
     * @return void
     */
    public function createAction(\CodeID\AccountingSystem\Domain\Model\Patient $newPatient)
    {
        $this->patientRepository->add($newPatient);
        $this->redirect('list');
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @ignorevalidation $patient
     * @return void
     */
    public function editAction(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
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

    /**
     * Returns an instance of the current Frontend User.
     *
     * @return \TYPO3\CMS\Frontend\Authentication\FrontendUserAuthentication
     */
    protected function getFrontendUser()
    {
        return $GLOBALS['TSFE']->fe_user;
    }



    /**
     * Returns user data of the current Frontend User.
     *
     * @return array
     */
    protected function getFrontendUserData()
    {
        return $this->getFrontendUser()->user ? $this->getFrontendUser()->user : [];
    }
}
