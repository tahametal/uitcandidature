<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 */
class Responsable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $email;

    /**
     *  @var \mqlUIT\UserBundle\Entity\UserFOS
     */
    private $userfos;


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
     * Set nom
     *
     * @param string $nom
     * @return Responsable
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
     * @return Responsable
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
     * Set email
     *
     * @param string $email
     * @return Responsable
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
     * Set userfos
     *
     * @param \mqlUIT\UserBundle\Entity\UserFOS $userFOS
     * @return Responsable
     */
    public function setUserfos(\mqlUIT\UserBundle\Entity\UserFOS $userfos = null)
    {
        $this->userfos = $userfos;
    
        return $this;
    }

    /**
     * Get userfos
     *
     * @return \mqlUIT\UserBundle\Entity\UserFOS
     */
    public function getUserfos()
    {
        return $this->userfos;
    }
}
