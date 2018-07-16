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

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Invoice
 */
class Invoice extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation>
     * @lazy
     */
    protected $consultations;

    /**
     * @var \CodeID\AccountingSystem\Domain\Model\Patient $patient
     * @lazy
     */
    protected $patient;

    /**
     * @var string
     */
    protected $invoiceFileName;

    /**
     * @var int
     */
    protected $invoiceId;

    /**
     * @var int
     */
    protected $serviceProvider;

    /**
     * @var float
     */
    protected $amount = 0.0;

    /**
     * @var \DateTime
     */
    protected $date = '';

    /**
     * @return void
     */
    public function __construct()
    {
        $this->consultations = new ObjectStorage();
    }

    /**
     *
     * @param Consultation $consultation
     * @return void
     */
    public function addConsultation(Consultation $consultation)
    {
        $this->consultations->attach($consultation);
    }

    /**
     *
     * @param Consultation $consultationToRemove
     * @return void
     */
    public function removeConsultation(Consultation $consultationToRemove)
    {
        $this->consultations->detach($consultationToRemove);
    }

    /**
     * @return ObjectStorage
     */
    public function getConsultations()
    {
        return $this->consultations;
    }

    /**
     * @param ObjectStorage $consultations
     * @return void
     */
    public function setConsultations(ObjectStorage $consultations)
    {
        $this->consultations = $consultations;
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
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param int $invoiceId
     * @return $this
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


    /**
     * @return string
     */
    public function getInvoiceFileName()
    {
        return $this->invoiceFileName;
    }

    /**
     * @param string $invoiceFileName
     * @return $this
     */
    public function setInvoiceFileName($invoiceFileName)
    {
        $this->invoiceFileName = $invoiceFileName;
        return $this;
    }

    /**
     * @return Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param Patient $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

}
