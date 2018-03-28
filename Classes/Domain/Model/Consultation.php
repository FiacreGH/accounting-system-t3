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
     * facture
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Facture>
     * @cascade remove
     */
    protected $facture = null;

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
        $this->facture = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Facture
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Facture $facture
     * @return void
     */
    public function addFacture(\CodeID\AccountingSystem\Domain\Model\Facture $facture)
    {
        $this->facture->attach($facture);
    }

    /**
     * Removes a Facture
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Facture $factureToRemove The Facture to be removed
     * @return void
     */
    public function removeFacture(\CodeID\AccountingSystem\Domain\Model\Facture $factureToRemove)
    {
        $this->facture->detach($factureToRemove);
    }

    /**
     * Returns the facture
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Facture> $facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Sets the facture
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Facture> $facture
     * @return void
     */
    public function setFacture(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $facture)
    {
        $this->facture = $facture;
    }
}
