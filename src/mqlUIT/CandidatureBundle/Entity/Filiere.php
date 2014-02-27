<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 */
class Filiere
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
     * @var \mqlUIT\CandidatureBundle\Entity\Responsable
     */
    private $responsable;


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
     * @return Filiere
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
     * Set responsable
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Responsable $responsable
     * @return Filiere
     */
    public function setResponsable(\mqlUIT\CandidatureBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Responsable 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
public function __toString()
{
    return (string) $this->getIntitule();
}
}
