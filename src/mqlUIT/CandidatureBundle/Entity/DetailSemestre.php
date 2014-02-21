<?php

namespace mqlUIT\CandidatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailSemestre
 */
class DetailSemestre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $note;

    /**
     * @var string
     */
    private $hasrattrapage;

    /**
     * @var \mqlUIT\CandidatureBundle\Entity\Semestre
     */
    private $semestre;

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
     * Set note
     *
     * @param float $note
     * @return DetailSemestre
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
     * Set hasrattrapage
     *
     * @param string $hasrattrapage
     * @return DetailSemestre
     */
    public function setHasrattrapage($hasrattrapage)
    {
        $this->hasrattrapage = $hasrattrapage;
    
        return $this;
    }

    /**
     * Get hasrattrapage
     *
     * @return string 
     */
    public function getHasrattrapage()
    {
        return $this->hasrattrapage;
    }

    /**
     * Set semestre
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Semestre $semestre
     * @return DetailSemestre
     */
    public function setSemestre(\mqlUIT\CandidatureBundle\Entity\Semestre $semestre = null)
    {
        $this->semestre = $semestre;
    
        return $this;
    }

    /**
     * Get semestre
     *
     * @return \mqlUIT\CandidatureBundle\Entity\Semestre 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set candidat
     *
     * @param \mqlUIT\CandidatureBundle\Entity\Candidat $candidat
     * @return DetailSemestre
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
