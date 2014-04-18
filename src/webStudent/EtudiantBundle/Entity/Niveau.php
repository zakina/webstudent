<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use webStudent\EtudiantBundle\Entity\Etudiant;

/**
 * Niveau
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\NiveauRepository")
 */
class Niveau
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
     * @ORM\Column(name="libelle", type="string", length=20)
     */
    private $libelle;

	
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
     * Set libelle
     *
     * @param string $libelle
     * @return Niveau
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
     * Set etudiant
     *
     * @param \webStudent\EtudiantBundle\Entity\Etudiant $etudiant
     * @return Niveau
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
     * @return Niveau
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