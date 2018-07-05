<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="degree")
 */
class Degree
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $abbreviation;

    /**
     * @ORM\Column(type="string")
     */
    private $weight;

    /**
     * @ORM\Column(type="string")
     */
    private $level;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMedical;

    /**
     * @ORM\Column(type="string")
     */
    private $typeID;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @param mixed $abbreviation
     */
    public function setAbbreviation($abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getisMedical()
    {
        return $this->isMedical;
    }

    /**
     * @param mixed $isMedical
     */
    public function setIsMedical($isMedical): void
    {
        $this->isMedical = $isMedical;
    }

    /**
     * @return mixed
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * @param mixed $typeID
     */
    public function setTypeID($typeID): void
    {
        $this->typeID = $typeID;
    }

}