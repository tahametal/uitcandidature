<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filtre
 */
class Filtre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
     * Set filtre
     *
     * @param string $filtre
     * @return Filtre
     */
    public function setFiltre($filtre)
    {
        $this->filtre = $filtre;
    
        return $this;
    }

    /**
     * Get filtre
     *
     * @return string 
     */
    public function getFiltre()
    {
        return $this->filtre;
    }
}
