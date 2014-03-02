<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 */
class Experience
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
     * @var \Date
     */
    private $datedebut;

    /**
     * @var \Date
     */
    private $datefin;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Experiencetype
     */
    private $type;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Candidat
     */
    private $candidat;


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
     * @return Experience
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
     * Set datedebut
     *
     * @param \Date $datedebut
     * @return Experience
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \Date
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \Date $datefin
     * @return Experience
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \Date
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Experience
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Experiencetype $type
     * @return Experience
     */
    public function setType(\mqlUIT\CandidatureBundle\Entity\Experiencetype $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Experiencetype 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set candidat
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Candidat $candidat
     * @return Experience
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
}
