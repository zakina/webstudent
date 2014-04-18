<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use webStudent\EtudiantBundle\Entity\Section;
use webStudent\EtudiantBundle\Entity\Promo;
use webStudent\EtudiantBundle\Entity\Niveau;
/**
 * PeriodeStage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\PeriodeStageRepository")
 */
class PeriodeStage
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSemaines", type="integer")
     */
    private $nbSemaines;


	/**
	* @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Promo")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $promo;
	
	/**
	* @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Section", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
	*/
	private $section;
		
	/**
	* @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Niveau", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
	*/
	private $niveau;
	
	
	
	/*----------------------------------------------------------------------------------------
	 *-----------------------  ACCESSEURS CI-DESSOUS------------------------------------------
	----------------------------------------------------------------------------------------*/
		
	
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return PeriodeStage
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return PeriodeStage
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nbSemaines
     *
     * @param integer $nbSemaines
     * @return PeriodeStage
     */
    public function setNbSemaines($nbSemaines)
    {
        $this->nbSemaines = $nbSemaines;
    
        return $this;
    }

    /**
     * Get nbSemaines
     *
     * @return integer 
     */
    public function getNbSemaines()
    {
        return $this->nbSemaines;
    }

    /**
     * Set promo
     *
     * @param \webStudent\EtudiantBundle\Entity\Promo $promo
     * @return PeriodeStage
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
     * Set section
     *
     * @param \webStudent\EtudiantBundle\Entity\Section $section
     * @return PeriodeStage
     */
    public function setSection(\webStudent\EtudiantBundle\Entity\Section $section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return \webStudent\EtudiantBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set niveau
     *
     * @param \webStudent\EtudiantBundle\Entity\Niveau $niveau
     * @return PeriodeStage
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
}