<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Degrees
 *
 * @ORM\Table(name="degrees", uniqueConstraints={@ORM\UniqueConstraint(name="degrees_id_uindex", columns={"degree_id"}), @ORM\UniqueConstraint(name="degrees_degree_abbreviation_uindex", columns={"degree_abbreviation"})})
 * @ORM\Entity
 */
class Degrees
{

    /**
     * @var integer
     *
     * @ORM\Column(name="degree_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $degreeId;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_abbreviation", type="string", length=10,
     *   nullable=false)
     */
    private $degreeAbbreviation;

    /**
     * @var integer
     *
     * @ORM\Column(name="degree_weight", type="integer", nullable=true)
     */
    private $degreeWeight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="degree_level", type="text", length=65535,
     *   nullable=true)
     */
    private $degreeLevel = 'NULL';

    /**
     * @var boolean
     *
     * @ORM\Column(name="degree_is_medical", type="boolean", nullable=true)
     */
    private $degreeIsMedical = '0';

    /**
     * @return int
     */
    public function getDegreeId(): int
    {
        return $this->degreeId;
    }

    /**
     * @param int $degreeId
     */
    public function setDegreeId(int $degreeId): void
    {
        $this->degreeId = $degreeId;
    }

    /**
     * @return string
     */
    public function getDegreeAbbreviation(): string
    {
        return $this->degreeAbbreviation;
    }

    /**
     * @param string $degreeAbbreviation
     */
    public function setDegreeAbbreviation(string $degreeAbbreviation): void
    {
        $this->degreeAbbreviation = $degreeAbbreviation;
    }

    /**
     * @return int
     */
    public function getDegreeWeight(): ?int
    {
        return $this->degreeWeight;
    }

    /**
     * @param int $degreeWeight
     */
    public function setDegreeWeight(int $degreeWeight): void
    {
        $this->degreeWeight = $degreeWeight;
    }

    /**
     * @return string
     */
    public function getDegreeLevel(): ?string
    {
        return $this->degreeLevel;
    }

    /**
     * @param string $degreeLevel
     */
    public function setDegreeLevel(string $degreeLevel): void
    {
        $this->degreeLevel = $degreeLevel;
    }

    /**
     * @return bool
     */
    public function getDegreeIsMedical(): bool
    {
        return $this->degreeIsMedical;
    }

    /**
     * @param bool $degreeIsMedical
     */
    public function setDegreeIsMedical(bool $degreeIsMedical): void
    {
        $this->degreeIsMedical = $degreeIsMedical;
    }


}

