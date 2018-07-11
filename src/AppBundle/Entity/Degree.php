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
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMedical;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DegreeType")
     * @ORM\JoinColumn(nullable=false)
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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

}