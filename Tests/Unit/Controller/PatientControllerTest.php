<?php
namespace CodeID\AccountingSystem\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Fiacre Sankara <fiacre.sankara@gmail.com>
 */
class PatientControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CodeID\AccountingSystem\Controller\PatientController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\CodeID\AccountingSystem\Controller\PatientController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPatientsFromRepositoryAndAssignsThemToView()
    {

        $allPatients = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $patientRepository = $this->getMockBuilder(\CodeID\AccountingSystem\Domain\Repository\PatientRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $patientRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPatients));
        $this->inject($this->subject, 'patientRepository', $patientRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('patients', $allPatients);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPatientToView()
    {
        $patient = new \CodeID\AccountingSystem\Domain\Model\Patient();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('patient', $patient);

        $this->subject->showAction($patient);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenPatientToPatientRepository()
    {
        $patient = new \CodeID\AccountingSystem\Domain\Model\Patient();

        $patientRepository = $this->getMockBuilder(\CodeID\AccountingSystem\Domain\Repository\PatientRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $patientRepository->expects(self::once())->method('add')->with($patient);
        $this->inject($this->subject, 'patientRepository', $patientRepository);

        $this->subject->createAction($patient);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenPatientToView()
    {
        $patient = new \CodeID\AccountingSystem\Domain\Model\Patient();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('patient', $patient);

        $this->subject->editAction($patient);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenPatientInPatientRepository()
    {
        $patient = new \CodeID\AccountingSystem\Domain\Model\Patient();

        $patientRepository = $this->getMockBuilder(\CodeID\AccountingSystem\Domain\Repository\PatientRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $patientRepository->expects(self::once())->method('update')->with($patient);
        $this->inject($this->subject, 'patientRepository', $patientRepository);

        $this->subject->updateAction($patient);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenPatientFromPatientRepository()
    {
        $patient = new \CodeID\AccountingSystem\Domain\Model\Patient();

        $patientRepository = $this->getMockBuilder(\CodeID\AccountingSystem\Domain\Repository\PatientRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $patientRepository->expects(self::once())->method('remove')->with($patient);
        $this->inject($this->subject, 'patientRepository', $patientRepository);

        $this->subject->deleteAction($patient);
    }
}
