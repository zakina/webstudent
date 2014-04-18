<?php

namespace webStudent\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use webStudent\StageBundle\Entity\Stage;

/**
 * Stage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\StageBundle\Entity\StageRepository")
 */
class Stage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluation", type="integer")
     */
    private $evaluation;

	
	
	/**
     * @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Etudiant", inversedBy="stages")
     * @ORM\JoinColumn(nullable=false)
     */
	private $etudiant;

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
     * Set libelle
     *
     * @param string $libelle
     * @return Stage
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set evaluation
     *
     * @param integer $evaluation
     * @return Stage
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    
        return $this;
    }

    /**
     * Get evaluation
     *
     * @return integer 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

 

    /**
     * Set etudiant
     *
     * @param \webStudent\EtudiantBundle\Entity\Etudiant $etudiant
     * @return Stage
     */
    public function setEtudiant(\webStudent\EtudiantBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;
    
        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \webStudent\EtudiantBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}