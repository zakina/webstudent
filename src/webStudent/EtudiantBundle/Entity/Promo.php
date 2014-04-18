<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use webStudent\EtudiantBundle\Entity\PeriodeStage;
use webStudent\EtudiantBundle\Entity\Etudiant;

/**
 * Promo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\PromoRepository")
 */
class Promo
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
     * @ORM\Column(name="annee", type="string", length=9)
     */
    private $annee;


	/**
	* @ORM\OneToMany(targetEntity="webStudent\EtudiantBundle\Entity\Etudiant", mappedBy="etudiant")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $etudiants;
	
	
	
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
     * Set annee
     *
     * @param string $annee
     * @return Promo
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set etudiant
     *
     * @param \webStudent\EtudiantBundle\Entity\Etudiant $etudiant
     * @return Promo
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add etudiants
     *
     * @param \webStudent\EtudiantBundle\Entity\Etudiant $etudiants
     * @return Promo
     */
    public function addEtudiant(\webStudent\EtudiantBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \webStudent\EtudiantBundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\webStudent\EtudiantBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }
}