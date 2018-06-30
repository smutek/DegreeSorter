<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacultyDegrees
 *
 * @ORM\Table(name="faculty_degrees", uniqueConstraints={@ORM\UniqueConstraint(name="faculty_degrees_faculty_degree_id_uindex", columns={"faculty_degree_id"})})
 * @ORM\Entity
 */
class FacultyDegrees
{

    /**
     * @return int
     */
    public function getFacultyDegreeId(): int
    {
        return $this->facultyDegreeId;
    }

    /**
     * @param int $facultyDegreeId
     */
    public function setFacultyDegreeId(int $facultyDegreeId): void
    {
        $this->facultyDegreeId = $facultyDegreeId;
    }

    /**
     * @return int
     */
    public function getFacultyDegreeMemberId(): int
    {
        return $this->facultyDegreeMemberId;
    }

    /**
     * @param int $facultyDegreeMemberId
     */
    public function setFacultyDegreeMemberId(int $facultyDegreeMemberId): void
    {
        $this->facultyDegreeMemberId = $facultyDegreeMemberId;
    }

    /**
     * @return string
     */
    public function getFacultyDegreeYearReceived(): string
    {
        return $this->facultyDegreeYearReceived;
    }

    /**
     * @param string $facultyDegreeYearReceived
     */
    public function setFacultyDegreeYearReceived(
      string $facultyDegreeYearReceived
    ): void {
        $this->facultyDegreeYearReceived = $facultyDegreeYearReceived;
    }

    /**
     * @return string
     */
    public function getFacultyDegreeUniversity(): string
    {
        return $this->facultyDegreeUniversity;
    }

    /**
     * @param string $facultyDegreeUniversity
     */
    public function setFacultyDegreeUniversity(string $facultyDegreeUniversity
    ): void {
        $this->facultyDegreeUniversity = $facultyDegreeUniversity;
    }

    /**
     * @return bool
     */
    public function isFacultyDegreeIsHighestDegree(): bool
    {
        return $this->facultyDegreeIsHighestDegree;
    }

    /**
     * @param bool $facultyDegreeIsHighestDegree
     */
    public function setFacultyDegreeIsHighestDegree(
      bool $facultyDegreeIsHighestDegree
    ): void {
        $this->facultyDegreeIsHighestDegree = $facultyDegreeIsHighestDegree;
    }

    /**
     * @return string
     */
    public function getFacultyDegreeAbbreviation(): string
    {
        return $this->facultyDegreeAbbreviation;
    }

    /**
     * @param string $facultyDegreeAbbreviation
     */
    public function setFacultyDegreeAbbreviation(
      string $facultyDegreeAbbreviation
    ): void {
        $this->facultyDegreeAbbreviation = $facultyDegreeAbbreviation;
    }

    /**
     * @return string
     */
    public function getFacultyDegreeMemberFirstName(): string
    {
        return $this->facultyDegreeMemberFirstName;
    }

    /**
     * @param string $facultyDegreeMemberFirstName
     */
    public function setFacultyDegreeMemberFirstName(
      string $facultyDegreeMemberFirstName
    ): void {
        $this->facultyDegreeMemberFirstName = $facultyDegreeMemberFirstName;
    }

    /**
     * @return string
     */
    public function getFacultyDegreeMemberLastName(): string
    {
        return $this->facultyDegreeMemberLastName;
    }

    /**
     * @param string $facultyDegreeMemberLastName
     */
    public function setFacultyDegreeMemberLastName(
      string $facultyDegreeMemberLastName
    ): void {
        $this->facultyDegreeMemberLastName = $facultyDegreeMemberLastName;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="faculty_degree_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facultyDegreeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="faculty_degree_member_id", type="integer",
     *   nullable=true)
     */
    private $facultyDegreeMemberId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="faculty_degree_year_received", type="text",
     *   length=255, nullable=true)
     */
    private $facultyDegreeYearReceived = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="faculty_degree_university", type="text", length=255,
     *   nullable=true)
     */
    private $facultyDegreeUniversity = 'NULL';

    /**
     * @var boolean
     *
     * @ORM\Column(name="faculty_degree_is_highest_degree", type="boolean",
     *   nullable=true)
     */
    private $facultyDegreeIsHighestDegree = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="faculty_degree_abbreviation", type="text", length=255,
     *   nullable=true)
     */
    private $facultyDegreeAbbreviation = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="faculty_degree_member_first_name", type="text",
     *   length=255, nullable=true)
     */
    private $facultyDegreeMemberFirstName = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="faculty_degree_member_last_name", type="text",
     *   length=255, nullable=true)
     */
    private $facultyDegreeMemberLastName = 'NULL';


}

