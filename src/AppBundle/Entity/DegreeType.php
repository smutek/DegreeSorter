<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="degree_type")
 */
class DegreeType
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
    private $degreeName;

    /**
     * @ORM\Column(type="integer")
     */
    private $degreeLevel;

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
    public function getDegreeName()
    {
        return $this->degreeName;
    }

    /**
     * @param mixed $degreeName
     */
    public function setDegreeName($degreeName): void
    {
        $this->degreeName = $degreeName;
    }

    /**
     * @return mixed
     */
    public function getDegreeLevel()
    {
        return $this->degreeLevel;
    }

    /**
     * @param mixed $degreeLevel
     */
    public function setDegreeLevel($degreeLevel): void
    {
        $this->degreeLevel = $degreeLevel;
    }
}