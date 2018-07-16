<?php

namespace CodeID\AccountingSystem\Domain\Model;

/***
 *
 * This file is part of the "Accounting System" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Fiacre Sankara <fiacre.sankara@gemail.com>, CodeID
 *
 ***/

/**
 * Patient
 */
class Patient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     */
    protected $lastName = '';

    /**
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * @var string
     */
    protected $street = '';

    /**
     * @var string
     */
    protected $postalCode = '';

    /**
     * @var string
     */
    protected $city = '';

    /**
     * @var string
     */
    protected $mobilePhone = '';

    /**
     * @var string
     */
    protected $phone = '';

    /**
     * @var string
     */
    protected $email = '';

    /**
     * @var \DateTime
     */
    protected $birthDate = '';

    /**
     * @var string
     */
    protected $comments = '';

    /**
     * @var string
     */
    protected $commentsInvoice = '';

    /**
     * @var string
     */
    protected $anamnesis = '';

    /**
     * @var string
     */
    protected $accidents = '';

    /**
     * @var string
     */
    protected $operations = '';

    /**
     * @var string
     */
    protected $diseases = '';

    /**
     * @var string
     */
    protected $treatments = '';

    /**
     * @var string
     */
    protected $other = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation>
     */
    protected $consultations;


    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Invoice>
     */
    protected $invoices;


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
        $this->consultations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->invoices = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string $postalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return void
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string $mobilePhone
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return void
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     * @return void
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
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
     * @return string $commentsInvoice
     */
    public function getCommentsInvoice()
    {
        return $this->commentsInvoice;
    }

    /**
     * @param string $commentsInvoice
     * @return void
     */
    public function setCommentsInvoice($commentsInvoice)
    {
        $this->commentsInvoice = $commentsInvoice;
    }

    /**
     * @return string $anamnesis
     */
    public function getAnamnesis()
    {
        return $this->anamnesis;
    }

    /**
     * @param string $anamnesis
     * @return void
     */
    public function setAnamnesis($anamnesis)
    {
        $this->anamnesis = $anamnesis;
    }

    /**
     * @return string $accidents
     */
    public function getAccidents()
    {
        return $this->accidents;
    }

    /**
     * @param string $accidents
     * @return void
     */
    public function setAccidents($accidents)
    {
        $this->accidents = $accidents;
    }

    /**
     * @return string $operations
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param string $operations
     * @return void
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return string $diseases
     */
    public function getDiseases()
    {
        return $this->diseases;
    }

    /**
     * @param string $diseases
     * @return void
     */
    public function setDiseases($diseases)
    {
        $this->diseases = $diseases;
    }

    /**
     * @return string $treatments
     */
    public function getTreatments()
    {
        return $this->treatments;
    }

    /**
     * @param string $treatments
     * @return void
     */
    public function setTreatments($treatments)
    {
        $this->treatments = $treatments;
    }

    /**
     * @return string $other
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param string $other
     * @return void
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultations
     * @return void
     */
    public function addConsultations(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->consultations->attach($consultation);
    }

    /**
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultationsToRemove The Consultation to be removed
     * @return void
     */
    public function removeConsultations(\CodeID\AccountingSystem\Domain\Model\Consultation $consultationToRemove)
    {
        $this->consultations->detach($consultationToRemove);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation> $consultations
     */
    public function getConsultations()
    {
        return $this->consultations;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation> $consultations
     * @return void
     */
    public function setConsultations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $consultations)
    {
        $this->consultations = $consultations;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $invoices
     * @return $this
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
        return $this;
    }

}
