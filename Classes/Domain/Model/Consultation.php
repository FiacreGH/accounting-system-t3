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
     * @var \DateTime
     */
    protected $date = '';

    /**
     * @var string
     */
    protected $place = '';

    /**
     * @var string
     */
    protected $reason = '';

    /**
     * @var string
     */
    protected $note = '';
    /**
     * @var string
     */
    protected $comments = '';
    /**
     * @var string
     */
    protected $amountCode = '';

    /**
     * @var string
     */
    protected $quantity = '';

    /**
     * @var string
     */
    protected $price = '';

    /**
     * @var string
     */
    protected $pointValue = '';

    /**
     * @var string
     */
    protected $tva = '';

    /**
     * @var string
     */
    protected $amount = '';

    /**
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
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return string $reason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return void
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
    /**
     * @return string $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
    /**
     * @return string $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     * @return void
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return string $amountCode
     */
    public function getAmountCode()
    {
        return $this->amountCode;
    }

    /**
     * @param string $amountCode
     * @return void
     */
    public function setAmountCode($amountCode)
    {
        $this->amountCode = $amountCode;
    }
    /**
     * @return string $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    /**
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * @return string $pointValue
     */
    public function getPointValue()
    {
        return $this->pointValue;
    }

    /**
     * @param string $pointValue
     * @return void
     */
    public function setPointValue($pointValue)
    {
        $this->pointValue = $pointValue;
    }
    /**
     * @return string $tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param string $tva
     * @return void
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }
    /**
     * @return string $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Invoice $invoice
     * @return void
     */
    public function addInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoice)
    {
        $this->invoice->attach($invoice);
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Invoice $invoiceToRemove The Invoice to be removed
     * @return void
     */
    public function removeInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoiceToRemove)
    {
        $this->invoice->detach($invoiceToRemove);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice> $invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice> $invoice
     * @return void
     */
    public function setInvoice(\CodeID\AccountingSystem\Domain\Model\Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return \CodeID\AccountingSystem\Domain\Model\Patient $patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @return void
     */
    public function setPatient(\CodeID\AccountingSystem\Domain\Model\Patient $patient)
    {
        $this->patient = $patient;
    }
}
