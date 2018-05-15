<?php
namespace CodeID\AccountingSystem\Domain\Model;

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
 * Consultation
 */
class Consultation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * invoice
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice>
     * @cascade remove
     */
    protected $invoice = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->invoice = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Invoice
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Invoice $invoice
     * @return void
     */
    public function addInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoice)
    {
        $this->invoice->attach($invoice);
    }

    /**
     * Removes a Invoice
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Invoice $invoiceToRemove The Invoice to be removed
     * @return void
     */
    public function removeInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoiceToRemove)
    {
        $this->invoice->detach($invoiceToRemove);
    }

    /**
     * Returns the invoice
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice> $invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets the invoice
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice> $invoice
     * @return void
     */
    public function setInvoice(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $invoice)
    {
        $this->invoice = $invoice;
    }
}
