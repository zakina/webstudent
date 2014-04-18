<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use webStudent\EtudiantBundle\Entity\Utilisateur;
use webStudent\EtudiantBundle\Entity\Niveau;
use webStudent\StageBundle\Entity\Stage;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\EtudiantRepository")
 */
class Etudiant extends Utilisateur
{
    /*
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    //private $id;

	 /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEntree", type="date", nullable=true)
     */
    private $dateEntree;
	
	/**
     * @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Niveau",  inversedBy="etudiants")
     * @ORM\JoinColumn(nullable=false)
     */
	private $niveau;
	

	
	/**
	*  @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Promo", inversedBy="etudiants")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $promo;
	
		/**
	* @ORM\OneToMany(targetEntity="webStudent\StageBundle\Entity\Stage", mappedBy="stage")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $stages;
	
	
	/*-------------------------------------------------------------------------------------------------*
	 *-------------------------------------- CONSTRUCTEUR --------------------------------------------*
	 *-------------------------------------------------------------------------------------------------*/	
	public function __construct()
	{
		$this->dateEntree = new \Datetime('09/02/'.date('Y'));
		// + il faudra initialiser la section en recuperant la section de l'enseignant connecté
	}
	
	/*-------------------------------------------------------------------------------------------------*
	 *-------------------------------------- LES ACCESSEURS--------------------------------------------*
	 *-------------------------------------------------------------------------------------------------*/	

    /*
     * Get id
     *
     * @return integer 
     */
    /*public function getId()
    {
        return $this->id;
    }*/

    /**
     * Set niveau
     *
     * @param \webStudent\EtudiantBundle\Entity\Niveau $niveau
     * @return Etudiant
     */
    public function setNiveau(\webStudent\EtudiantBundle\Entity\Niveau $niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return \webStudent\EtudiantBundle\Entity\Niveau 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set promo
     *
     * @param \webStudent\EtudiantBundle\Entity\Promo $promo
     * @return Etudiant
     */
    public function setPromo(\webStudent\EtudiantBundle\Entity\Promo $promo)
    {
        $this->promo = $promo;
    
        return $this;
    }

    /**
     * Get promo
     *
     * @return \webStudent\EtudiantBundle\Entity\Promo 
     */
    public function getPromo()
    {
        return $this->promo;
    }
	  

    /**
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     * @return Etudiant
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;
    
        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime 
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

   
    /**
     * Add stages
     *
     * @param \webStudent\StageBundle\Entity\Stage $stages
     * @return Etudiant
     */
    public function addStage(\webStudent\StageBundle\Entity\Stage $stages)
    {
        $this->stages[] = $stages;
    
        return $this;
    }

    /**
     * Remove stages
     *
     * @param \webStudent\StageBundle\Entity\Stage $stages
     */
    public function removeStage(\webStudent\StageBundle\Entity\Stage $stages)
    {
        $this->stages->removeElement($stages);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStages()
    {
        return $this->stages;
    }
}