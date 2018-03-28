<?php
namespace CodeID\AccountingSystem\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Fiacre Sankara <fiacre.sankara@gmail.com>
 */
class PatientTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CodeID\AccountingSystem\Domain\Model\Patient
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CodeID\AccountingSystem\Domain\Model\Patient();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );
    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPrenomsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrenoms()
        );
    }

    /**
     * @test
     */
    public function setPrenomsForStringSetsPrenoms()
    {
        $this->subject->setPrenoms('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'prenoms',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdresseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdresse()
        );
    }

    /**
     * @test
     */
    public function setAdresseForStringSetsAdresse()
    {
        $this->subject->setAdresse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adresse',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelephoneportableReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTelephoneportable()
        );
    }

    /**
     * @test
     */
    public function setTelephoneportableForStringSetsTelephoneportable()
    {
        $this->subject->setTelephoneportable('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'telephoneportable',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelephonefixeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTelephonefixe()
        );
    }

    /**
     * @test
     */
    public function setTelephonefixeForStringSetsTelephonefixe()
    {
        $this->subject->setTelephonefixe('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'telephonefixe',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMail()
        );
    }

    /**
     * @test
     */
    public function setMailForStringSetsMail()
    {
        $this->subject->setMail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDatenaissanceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatenaissance()
        );
    }

    /**
     * @test
     */
    public function setDatenaissanceForStringSetsDatenaissance()
    {
        $this->subject->setDatenaissance('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datenaissance',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentairesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCommentaires()
        );
    }

    /**
     * @test
     */
    public function setCommentairesForStringSetsCommentaires()
    {
        $this->subject->setCommentaires('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'commentaires',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAnamneseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnamnese()
        );
    }

    /**
     * @test
     */
    public function setAnamneseForStringSetsAnamnese()
    {
        $this->subject->setAnamnese('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'anamnese',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccidentsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccidents()
        );
    }

    /**
     * @test
     */
    public function setAccidentsForStringSetsAccidents()
    {
        $this->subject->setAccidents('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accidents',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOperationsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOperations()
        );
    }

    /**
     * @test
     */
    public function setOperationsForStringSetsOperations()
    {
        $this->subject->setOperations('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'operations',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaladiesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMaladies()
        );
    }

    /**
     * @test
     */
    public function setMaladiesForStringSetsMaladies()
    {
        $this->subject->setMaladies('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'maladies',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTraitementsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTraitements()
        );
    }

    /**
     * @test
     */
    public function setTraitementsForStringSetsTraitements()
    {
        $this->subject->setTraitements('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'traitements',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDiversReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDivers()
        );
    }

    /**
     * @test
     */
    public function setDiversForStringSetsDivers()
    {
        $this->subject->setDivers('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'divers',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getConsultationReturnsInitialValueForConsultation()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getConsultation()
        );
    }

    /**
     * @test
     */
    public function setConsultationForObjectStorageContainingConsultationSetsConsultation()
    {
        $consultation = new \CodeID\AccountingSystem\Domain\Model\Consultation();
        $objectStorageHoldingExactlyOneConsultation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneConsultation->attach($consultation);
        $this->subject->setConsultation($objectStorageHoldingExactlyOneConsultation);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneConsultation,
            'consultation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addConsultationToObjectStorageHoldingConsultation()
    {
        $consultation = new \CodeID\AccountingSystem\Domain\Model\Consultation();
        $consultationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $consultationObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($consultation));
        $this->inject($this->subject, 'consultation', $consultationObjectStorageMock);

        $this->subject->addConsultation($consultation);
    }

    /**
     * @test
     */
    public function removeConsultationFromObjectStorageHoldingConsultation()
    {
        $consultation = new \CodeID\AccountingSystem\Domain\Model\Consultation();
        $consultationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $consultationObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($consultation));
        $this->inject($this->subject, 'consultation', $consultationObjectStorageMock);

        $this->subject->removeConsultation($consultation);
    }
}
