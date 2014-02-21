<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 */
class Candidature
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $isvalid;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Candidat
     */
    private $candidat;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Filiere
     */
    private $filiere;


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
     * Set isvalid
     *
     * @param string $isvalid
     * @return Candidature
     */
    public function setIsvalid($isvalid)
    {
        $this->isvalid = $isvalid;
    
        return $this;
    }

    /**
     * Get isvalid
     *
     * @return string 
     */
    public function getIsvalid()
    {
        return $this->isvalid;
    }

    /**
     * Set candidat
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Candidat $candidat
     * @return Candidature
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
     * Set filiere
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Filiere $filiere
     * @return Candidature
     */
    public function setFiliere(\mqlUIT\CandidatureBundle\Entity\Filiere $filiere = null)
    {
        $this->filiere = $filiere;
    
        return $this;
    }

    /**
     * Get filiere
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
}
