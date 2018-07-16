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
     * @var int
     */
    protected $serviceProvider;

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
     * @var int
     */
    protected $quantity = 0;

    /**
     * @var float
     */
    protected $price = 0.0;

    /**
     * @var string
     */
    protected $pointValue = '';

    /**
     * @var string
     */
    protected $rate = '';

    /**
     * @var string
     */
    protected $tva = '';

    /**
     * @var float
     */
    protected $amount = 0.0;

    /**
     * @var bool
     */
    protected $isInvoiced = false;

    /**
     * @var \CodeID\AccountingSystem\Domain\Model\Invoice
     */
    protected $invoice;

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
     * @return string $rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
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
     * @return bool
     */
    public function isInvoiced()
    {
        return $this->isInvoiced;
    }

    /**
     * @return bool
     */
    public function getIsInvoiced()
    {
        return $this->isInvoiced;
    }

    /**
     * @param bool $isInvoiced
     * @return $this
     */
    public function setIsInvoiced($isInvoiced)
    {
        $this->isInvoiced = $isInvoiced;
        return $this;
    }


    /**
     * @return string
     */
    public function getAmountCode()
    {
        return $this->amountCode;
    }

    /**
     * @param string $amountCode
     * @return $this
     */
    public function setAmountCode($amountCode)
    {
        $this->amountCode = $amountCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * @param int $serviceProvider
     * @return $this
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
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

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }

}
