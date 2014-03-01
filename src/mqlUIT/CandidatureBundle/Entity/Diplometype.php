<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplometype
 */
class Diplometype
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $grade;


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
     * Set type
     *
     * @param string $type
     * @return Diplometype
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    public function __toString(){
            return $this->getType();
    }
    
     /**
     * Set grade
     *
     * @param string $grade
     * @return Candidat
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }
}
