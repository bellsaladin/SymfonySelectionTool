<?php

namespace Bse\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=30, nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=12, nullable=true)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=65, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=65, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=100, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement_origine", type="string", length=90, nullable=true)
     */
    private $etablissementOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="type_diplome", type="string", length=50, nullable=true)
     */
    private $typeDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule_diplome", type="string", length=100, nullable=true)
     */
    private $intituleDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=20, nullable=true)
     */
    private $mention;

    /**
     * @var boolean
     *
     * @ORM\Column(name="diplome_etranger", type="boolean", nullable=true)
     */
    private $diplomeEtranger;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_obtention", type="integer", nullable=true)
     */
    private $anneeObtention;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s1", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS1;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s2", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS2;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s3", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS3;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s4", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS4;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s5", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS5;

    /**
     * @var float
     *
     * @ORM\Column(name="note_s6", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteS6;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere", type="string", length=150, nullable=true)
     */
    private $filiere;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_inscription", type="string", length=45, nullable=true)
     */
    private $anneeInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="fosuser_id", type="integer", nullable=true)
     */
    private $fosuserId;

    private $motDePasse;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Inscription
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set cne
     *
     * @param string $cne
     * @return Inscription
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Inscription
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Inscription
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Inscription
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Inscription
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Inscription
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Inscription
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Inscription
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Inscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set etablissementOrigine
     *
     * @param string $etablissementOrigine
     * @return Inscription
     */
    public function setEtablissementOrigine($etablissementOrigine)
    {
        $this->etablissementOrigine = $etablissementOrigine;

        return $this;
    }

    /**
     * Get etablissementOrigine
     *
     * @return string 
     */
    public function getEtablissementOrigine()
    {
        return $this->etablissementOrigine;
    }

    /**
     * Set typeDiplome
     *
     * @param string $typeDiplome
     * @return Inscription
     */
    public function setTypeDiplome($typeDiplome)
    {
        $this->typeDiplome = $typeDiplome;

        return $this;
    }

    /**
     * Get typeDiplome
     *
     * @return string 
     */
    public function getTypeDiplome()
    {
        return $this->typeDiplome;
    }

    /**
     * Set intituleDiplome
     *
     * @param string $intituleDiplome
     * @return Inscription
     */
    public function setIntituleDiplome($intituleDiplome)
    {
        $this->intituleDiplome = $intituleDiplome;

        return $this;
    }

    /**
     * Get intituleDiplome
     *
     * @return string 
     */
    public function getIntituleDiplome()
    {
        return $this->intituleDiplome;
    }

    /**
     * Set mention
     *
     * @param string $mention
     * @return Inscription
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set diplomeEtranger
     *
     * @param boolean $diplomeEtranger
     * @return Inscription
     */
    public function setDiplomeEtranger($diplomeEtranger)
    {
        $this->diplomeEtranger = $diplomeEtranger;

        return $this;
    }

    /**
     * Get diplomeEtranger
     *
     * @return boolean 
     */
    public function getDiplomeEtranger()
    {
        return $this->diplomeEtranger;
    }

    /**
     * Set anneeObtention
     *
     * @param integer $anneeObtention
     * @return Inscription
     */
    public function setAnneeObtention($anneeObtention)
    {
        $this->anneeObtention = $anneeObtention;

        return $this;
    }

    /**
     * Get anneeObtention
     *
     * @return integer 
     */
    public function getAnneeObtention()
    {
        return $this->anneeObtention;
    }

    /**
     * Set noteS1
     *
     * @param float $noteS1
     * @return Inscription
     */
    public function setNoteS1($noteS1)
    {
        $this->noteS1 = $noteS1;

        return $this;
    }

    /**
     * Get noteS1
     *
     * @return float 
     */
    public function getNoteS1()
    {
        return $this->noteS1;
    }

    /**
     * Set noteS2
     *
     * @param float $noteS2
     * @return Inscription
     */
    public function setNoteS2($noteS2)
    {
        $this->noteS2 = $noteS2;

        return $this;
    }

    /**
     * Get noteS2
     *
     * @return float 
     */
    public function getNoteS2()
    {
        return $this->noteS2;
    }

    /**
     * Set noteS3
     *
     * @param float $noteS3
     * @return Inscription
     */
    public function setNoteS3($noteS3)
    {
        $this->noteS3 = $noteS3;

        return $this;
    }

    /**
     * Get noteS3
     *
     * @return float 
     */
    public function getNoteS3()
    {
        return $this->noteS3;
    }

    /**
     * Set noteS4
     *
     * @param float $noteS4
     * @return Inscription
     */
    public function setNoteS4($noteS4)
    {
        $this->noteS4 = $noteS4;

        return $this;
    }

    /**
     * Get noteS4
     *
     * @return float 
     */
    public function getNoteS4()
    {
        return $this->noteS4;
    }

    /**
     * Set noteS5
     *
     * @param float $noteS5
     * @return Inscription
     */
    public function setNoteS5($noteS5)
    {
        $this->noteS5 = $noteS5;

        return $this;
    }

    /**
     * Get noteS5
     *
     * @return float 
     */
    public function getNoteS5()
    {
        return $this->noteS5;
    }

    /**
     * Set noteS6
     *
     * @param float $noteS6
     * @return Inscription
     */
    public function setNoteS6($noteS6)
    {
        $this->noteS6 = $noteS6;

        return $this;
    }

    /**
     * Get noteS6
     *
     * @return float 
     */
    public function getNoteS6()
    {
        return $this->noteS6;
    }

    /**
     * Set filiere
     *
     * @param string $filiere
     * @return Inscription
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set anneeInscription
     *
     * @param string $anneeInscription
     * @return Inscription
     */
    public function setAnneeInscription($anneeInscription)
    {
        $this->anneeInscription = $anneeInscription;

        return $this;
    }

    /**
     * Get anneeInscription
     *
     * @return string 
     */
    public function getAnneeInscription()
    {
        return $this->anneeInscription;
    }

    /**
     * Set fosuserId
     *
     * @param integer $fosuserId
     * @return Inscription
     */
    public function setFosuserId($fosuserId)
    {
        $this->fosuserId = $fosuserId;

        return $this;
    }

    /**
     * Get fosuserId
     *
     * @return integer 
     */
    public function getFosuserId()
    {
        return $this->fosuserId;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Inscription
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getmotDePasse()
    {
        return $this->motDePasse;
    }
}
