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
 * ConsultationController
 */
class ConsultationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        if (!$this->getFrontendUserData()) {

            throw new \RuntimeException('Error: user must be logged in!', 1524814048);

        }
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $consultations = $this->consultationRepository->findAllBySearchTerm($searchTerm = '');
        $this->view->assignMultiple([
            'consultations' => $consultations,
            'searchTerm' => $searchTerm
        ]);
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
     * action newConsultation
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $newConsultation
     * @return void
     */
    public function createAction(\CodeID\AccountingSystem\Domain\Model\Consultation $newConsultation)
    {
        $this->consultationRepository->add($newConsultation);
        $this->redirect('list', 'Patient');
    }

    /**
     * action edit
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @ignorevalidation $consultation
     * @return void
     */
    public function editAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->view->assign('consultation', $consultation);
    }

    /**
     * action update
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function updateAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->consultationRepository->update($consultation);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function deleteAction(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->consultationRepository->remove($consultation);
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
