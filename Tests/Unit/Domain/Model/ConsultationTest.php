<?php
namespace CodeID\AccountingSystem\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Fiacre Sankara <fiacre.sankara@gmail.com>
 */
class ConsultationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CodeID\AccountingSystem\Domain\Model\Consultation
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CodeID\AccountingSystem\Domain\Model\Consultation();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFactureReturnsInitialValueForFacture()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFacture()
        );
    }

    /**
     * @test
     */
    public function setFactureForObjectStorageContainingFactureSetsFacture()
    {
        $facture = new \CodeID\AccountingSystem\Domain\Model\Facture();
        $objectStorageHoldingExactlyOneFacture = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFacture->attach($facture);
        $this->subject->setFacture($objectStorageHoldingExactlyOneFacture);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFacture,
            'facture',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFactureToObjectStorageHoldingFacture()
    {
        $facture = new \CodeID\AccountingSystem\Domain\Model\Facture();
        $factureObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $factureObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($facture));
        $this->inject($this->subject, 'facture', $factureObjectStorageMock);

        $this->subject->addFacture($facture);
    }

    /**
     * @test
     */
    public function removeFactureFromObjectStorageHoldingFacture()
    {
        $facture = new \CodeID\AccountingSystem\Domain\Model\Facture();
        $factureObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $factureObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($facture));
        $this->inject($this->subject, 'facture', $factureObjectStorageMock);

        $this->subject->removeFacture($facture);
    }
}
