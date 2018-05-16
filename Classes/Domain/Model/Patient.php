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
 * Patient
 */
class Patient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     *
     * @var string
     */
    protected $nom = '';

    /**
     * prenoms
     *
     * @var string
     */
    protected $prenoms = '';

    /**
     * adresse
     *
     * @var string
     */
    protected $adresse = '';
    /**
     * telephoneportable
     *
     * @var string
     */
    protected $rue = '';
    /**
     * telephoneportable
     *
     * @var string
     */
    protected $codepostal = '';
    /**
     * telephoneportable
     *
     * @var string
     */
    protected $ville = '';

    /**
     * telephoneportable
     *
     * @var string
     */
    protected $telephoneportable = '';

    /**
     * telephonefixe
     *
     * @var string
     */
    protected $telephonefixe = '';

    /**
     * mail
     *
     * @var string
     */
    protected $mail = '';

    /**
     * datenaissance
     *
     * @var string
     */
    protected $datenaissance = '';

    /**
     * commentaires
     *
     * @var string
     */
    protected $commentaires = '';

    /**
     * anamnese
     *
     * @var string
     */
    protected $anamnese = '';

    /**
     * accidents
     *
     * @var string
     */
    protected $accidents = '';

    /**
     * operations
     *
     * @var string
     */
    protected $operations = '';

    /**
     * maladies
     *
     * @var string
     */
    protected $maladies = '';

    /**
     * traitements
     *
     * @var string
     */
    protected $traitements = '';

    /**
     * divers
     *
     * @var string
     */
    protected $divers = '';

    /**
     * consultation
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation>
     * @cascade remove
     */
    protected $consultation = null;

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
        $this->consultation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the prenoms
     *
     * @return string $prenoms
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Sets the prenoms
     *
     * @param string $prenoms
     * @return void
     */
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;
    }

    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Returns the rue
     *
     * @return string $rue
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Sets the rue
     *
     * @param string $rue
     * @return void
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * Returns the codepostal
     *
     * @return string $codepostal
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Sets the codepostal
     *
     * @param string $codepostal
     * @return void
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Returns the telephoneportable
     *
     * @return string $telephoneportable
     */
    public function getTelephoneportable()
    {
        return $this->telephoneportable;
    }

    /**
     * Sets the telephoneportable
     *
     * @param string $telephoneportable
     * @return void
     */
    public function setTelephoneportable($telephoneportable)
    {
        $this->telephoneportable = $telephoneportable;
    }

    /**
     * Returns the telephonefixe
     *
     * @return string $telephonefixe
     */
    public function getTelephonefixe()
    {
        return $this->telephonefixe;
    }

    /**
     * Sets the telephonefixe
     *
     * @param string $telephonefixe
     * @return void
     */
    public function setTelephonefixe($telephonefixe)
    {
        $this->telephonefixe = $telephonefixe;
    }

    /**
     * Returns the mail
     *
     * @return string $mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail
     *
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Returns the datenaissance
     *
     * @return string $datenaissance
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Sets the datenaissance
     *
     * @param string $datenaissance
     * @return void
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * Returns the commentaires
     *
     * @return string $commentaires
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Sets the commentaires
     *
     * @param string $commentaires
     * @return void
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }

    /**
     * Returns the anamnese
     *
     * @return string $anamnese
     */
    public function getAnamnese()
    {
        return $this->anamnese;
    }

    /**
     * Sets the anamnese
     *
     * @param string $anamnese
     * @return void
     */
    public function setAnamnese($anamnese)
    {
        $this->anamnese = $anamnese;
    }

    /**
     * Returns the accidents
     *
     * @return string $accidents
     */
    public function getAccidents()
    {
        return $this->accidents;
    }

    /**
     * Sets the accidents
     *
     * @param string $accidents
     * @return void
     */
    public function setAccidents($accidents)
    {
        $this->accidents = $accidents;
    }

    /**
     * Returns the operations
     *
     * @return string $operations
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Sets the operations
     *
     * @param string $operations
     * @return void
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }

    /**
     * Returns the maladies
     *
     * @return string $maladies
     */
    public function getMaladies()
    {
        return $this->maladies;
    }

    /**
     * Sets the maladies
     *
     * @param string $maladies
     * @return void
     */
    public function setMaladies($maladies)
    {
        $this->maladies = $maladies;
    }

    /**
     * Returns the traitements
     *
     * @return string $traitements
     */
    public function getTraitements()
    {
        return $this->traitements;
    }

    /**
     * Sets the traitements
     *
     * @param string $traitements
     * @return void
     */
    public function setTraitements($traitements)
    {
        $this->traitements = $traitements;
    }

    /**
     * Returns the divers
     *
     * @return string $divers
     */
    public function getDivers()
    {
        return $this->divers;
    }

    /**
     * Sets the divers
     *
     * @param string $divers
     * @return void
     */
    public function setDivers($divers)
    {
        $this->divers = $divers;
    }

    /**
     * Adds a Consultation
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultation
     * @return void
     */
    public function addConsultation(\CodeID\AccountingSystem\Domain\Model\Consultation $consultation)
    {
        $this->consultation->attach($consultation);
    }

    /**
     * Removes a Consultation
     *
     * @param \CodeID\AccountingSystem\Domain\Model\Consultation $consultationToRemove The Consultation to be removed
     * @return void
     */
    public function removeConsultation(\CodeID\AccountingSystem\Domain\Model\Consultation $consultationToRemove)
    {
        $this->consultation->detach($consultationToRemove);
    }

    /**
     * Returns the consultation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation> $consultation
     */
    public function getConsultation()
    {
        return $this->consultation;
    }

    /**
     * Sets the consultation
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CodeID\AccountingSystem\Domain\Model\Consultation> $consultation
     * @return void
     */
    public function setConsultation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $consultation)
    {
        $this->consultation = $consultation;
    }
}
