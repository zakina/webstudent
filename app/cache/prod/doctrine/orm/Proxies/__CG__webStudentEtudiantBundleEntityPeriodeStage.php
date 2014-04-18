<?php

namespace Proxies\__CG__\webStudent\EtudiantBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PeriodeStage extends \webStudent\EtudiantBundle\Entity\PeriodeStage implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDateDebut($dateDebut)
    {
        $this->__load();
        return parent::setDateDebut($dateDebut);
    }

    public function getDateDebut()
    {
        $this->__load();
        return parent::getDateDebut();
    }

    public function setDateFin($dateFin)
    {
        $this->__load();
        return parent::setDateFin($dateFin);
    }

    public function getDateFin()
    {
        $this->__load();
        return parent::getDateFin();
    }

    public function setNbSemaines($nbSemaines)
    {
        $this->__load();
        return parent::setNbSemaines($nbSemaines);
    }

    public function getNbSemaines()
    {
        $this->__load();
        return parent::getNbSemaines();
    }

    public function setPromo(\webStudent\EtudiantBundle\Entity\Promo $promo)
    {
        $this->__load();
        return parent::setPromo($promo);
    }

    public function getPromo()
    {
        $this->__load();
        return parent::getPromo();
    }

    public function setSection(\webStudent\EtudiantBundle\Entity\Section $section)
    {
        $this->__load();
        return parent::setSection($section);
    }

    public function getSection()
    {
        $this->__load();
        return parent::getSection();
    }

    public function setNiveau(\webStudent\EtudiantBundle\Entity\Niveau $niveau)
    {
        $this->__load();
        return parent::setNiveau($niveau);
    }

    public function getNiveau()
    {
        $this->__load();
        return parent::getNiveau();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'dateDebut', 'dateFin', 'nbSemaines', 'promo', 'section', 'niveau');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}