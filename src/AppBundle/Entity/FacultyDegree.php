<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacultyDegreeRepository")
 * @ORM\Table(name="faculty_degree")
 */
class FacultyDegree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $facultyID;

    /**
     * @ORM\Column(type="string")
     */
    private $degreeYear;

    /**
     * @ORM\Column(type="string")
     */
    private $degreeUniversity;

    /**
     * @ORM\Column(type="boolean")
     */
    private $degreeIsHighest;

    /**
     * @ORM\Column(type="string")
     */
    private $degreeAbbreviation;

    /**
     * @ORM\Column(type="string")
     */
    private $facultyFirstName;

    /**
     * @ORM\Column(type="string")
     */
    private $facultyLastName;

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
    public function getFacultyID()
    {
        return $this->facultyID;
    }

    /**
     * @param mixed $facultyID
     */
    public function setFacultyID($facultyID): void
    {
        $this->facultyID = $facultyID;
    }

    /**
     * @return mixed
     */
    public function getDegreeYear()
    {
        return $this->degreeYear;
    }

    /**
     * @param mixed $degreeYear
     */
    public function setDegreeYear($degreeYear): void
    {
        $this->degreeYear = $degreeYear;
    }

    /**
     * @return mixed
     */
    public function getDegreeUniversity()
    {
        return $this->degreeUniversity;
    }

    /**
     * @param mixed $degreeUniversity
     */
    public function setDegreeUniversity($degreeUniversity): void
    {
        $this->degreeUniversity = $degreeUniversity;
    }

    /**
     * @return mixed
     */
    public function getDegreeIsHighest()
    {
        return $this->degreeIsHighest;
    }

    /**
     * @param mixed $degreeIsHighest
     */
    public function setDegreeIsHighest($degreeIsHighest): void
    {
        $this->degreeIsHighest = $degreeIsHighest;
    }

    /**
     * @return mixed
     */
    public function getDegreeAbbreviation()
    {
        return $this->degreeAbbreviation;
    }

    /**
     * @param mixed $degreeAbbreviation
     */
    public function setDegreeAbbreviation($degreeAbbreviation): void
    {
        $this->degreeAbbreviation = $degreeAbbreviation;
    }

    /**
     * @return mixed
     */
    public function getFacultyFirstName()
    {
        return $this->facultyFirstName;
    }

    /**
     * @param mixed $facultyFirstName
     */
    public function setFacultyFirstName($facultyFirstName): void
    {
        $this->facultyFirstName = $facultyFirstName;
    }

    /**
     * @return mixed
     */
    public function getFacultyLastName()
    {
        return $this->facultyLastName;
    }

    /**
     * @param mixed $facultyLastName
     */
    public function setFacultyLastName($facultyLastName): void
    {
        $this->facultyLastName = $facultyLastName;
    }

}