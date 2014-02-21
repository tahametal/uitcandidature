<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiltreFiliere
 */
class FiltreFiliere
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $coefficcient;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Filiere
     */
    private $filiere;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Filtre
     */
    private $filtre;


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
     * Set coefficcient
     *
     * @param integer $coefficcient
     * @return FiltreFiliere
     */
    public function setCoefficcient($coefficcient)
    {
        $this->coefficcient = $coefficcient;
    
        return $this;
    }

    /**
     * Get coefficcient
     *
     * @return integer 
     */
    public function getCoefficcient()
    {
        return $this->coefficcient;
    }

    /**
     * Set filiere
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Filiere $filiere
     * @return FiltreFiliere
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

    /**
     * Set filtre
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Filtre $filtre
     * @return FiltreFiliere
     */
    public function setFiltre(\mqlUIT\CandidatureBundle\Entity\Filtre $filtre = null)
    {
        $this->filtre = $filtre;
    
        return $this;
    }

    /**
     * Get filtre
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Filtre 
     */
    public function getFiltre()
    {
        return $this->filtre;
    }
}
