<?php
namespace CodeID\AccountingSystem\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Fiacre Sankara <fiacre.sankara@gmail.com>
 */
class FactureTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CodeID\AccountingSystem\Domain\Model\Facture
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CodeID\AccountingSystem\Domain\Model\Facture();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
