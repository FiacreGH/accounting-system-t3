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
     * @var \CodeID\AccountingSystem\Domain\Model\Patient
     */
    protected $patient = '';

    /**
     * \DateTime
     * @var string
     */
    protected $date = '';

    /**
     * @var string
     */
    protected $place = '';

    /**
     * Consultation Reason
     *
     * @var string
     */
    protected $reason = '';

    /**
     * Notes
     *
     * @var string
     */
    protected $note = '';
    /**
     * Comment
     *
     * @var string
     */
    protected $comment = '';
    /**
     * Tarif
     *
     * @var string
     */
    protected $tarif = '';
    /**
     * Tarif Code
     *
     * @var string
     */
    protected $codetarif = '';

    /**
     * Quantity
     *
     * @var string
     */
    protected $quantity = '';

    /**
     * Price
     *
     * @var string
     */
    protected $price = '';

    /**
     * Point Value
     *
     * @var string
     */
    protected $pointvalue = '';

    /**
     * Tva
     *
     * @var string
     */
    protected $tva = '';

    /**
     * Amount
     *
     * @var string
     */
    protected $amount = '';

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
     * Returns the date
     *
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param string $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Returns the place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the reason
     *
     * @return string $reason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets the reason
     *
     * @param string $reason
     * @return void
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
    /**
     * Returns the note
     *
     * @return string $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the note
     *
     * @param string $note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    /**
     * Returns the tarif
     *
     * @return string $tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Sets the tarif
     *
     * @param string $tarif
     * @return void
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }
    /**
     * Returns the codetarif
     *
     * @return string $codetarif
     */
    public function getCodetarif()
    {
        return $this->codetarif;
    }

    /**
     * Sets the codetarif
     *
     * @param string $codetarif
     * @return void
     */
    public function setCodetarif($codetarif)
    {
        $this->codetarif = $codetarif;
    }
    /**
     * Returns the quantity
     *
     * @return string $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param string $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    /**
     * Returns the price
     *
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param string $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * Returns the pointvalue
     *
     * @return string $pointvalue
     */
    public function getPointvalue()
    {
        return $this->pointvalue;
    }

    /**
     * Sets the pointvalue
     *
     * @param string $pointvalue
     * @return void
     */
    public function setPointvalue($pointvalue)
    {
        $this->pointvalue = $pointvalue;
    }
    /**
     * Returns the tva
     *
     * @return string $tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Sets the tva
     *
     * @param string $tva
     * @return void
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }
    /**
     * Returns the amount
     *
     * @return string $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount
     *
     * @param string $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
    public function setInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns the patient
     *
     * @return \CodeID\AccountingSystem\Domain\Model\Patient $patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets the patient
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function setPatient(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->patient = $patient;
    }
}
