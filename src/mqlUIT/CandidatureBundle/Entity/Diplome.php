<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 */
class Diplome
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var \DateTime
     */
    private $dateinscription;

    /**
     * @var \DateTime
     */
    private $dateobtention;

    /**
     * @var float
     */
    private $note;

    /**
     * @var string
     */
    private $mention;

    /**
     * @var string
     */
    private $etablissement;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Candidat
     */
    private $candidat;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Diplometype
     */
    private $diplometype;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Diplome
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     * @return Diplome
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;
    
        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime 
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    /**
     * Set dateobtention
     *
     * @param \DateTime $dateobtention
     * @return Diplome
     */
    public function setDateobtention($dateobtention)
    {
        $this->dateobtention = $dateobtention;
    
        return $this;
    }

    /**
     * Get dateobtention
     *
     * @return \DateTime 
     */
    public function getDateobtention()
    {
        return $this->dateobtention;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Diplome
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set mention
     *
     * @param string $mention
     * @return Diplome
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
     * Set etablissement
     *
     * @param string $etablissement
     * @return Diplome
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
    
        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Diplome
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
     * Set candidat
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Candidat $candidat
     * @return Diplome
     */
    public function setCandidat(\mqlUIT\CandidatureBundle\Entity\Candidat $candidat = null)
    {
        $this->candidat = $candidat;
    
        return $this;
    }

    /**
     * Get candidat
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Candidat 
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set diplometype
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Diplometype $diplometype
     * @return Diplome
     */
    public function setDiplometype(\mqlUIT\CandidatureBundle\Entity\Diplometype $diplometype = null)
    {
        $this->diplometype = $diplometype;
    
        return $this;
    }

    /**
     * Get diplometype
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Diplometype 
     */
    public function getDiplometype()
    {
        return $this->diplometype;
    }
}
