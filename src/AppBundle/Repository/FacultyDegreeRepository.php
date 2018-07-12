<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FacultyDegreeRepository extends EntityRepository
{
    public function findAllDegreesForFacultyID($facultyID)
    {
        return $this->createQueryBuilder('facultyDegree')
          ->andWhere('facultyDegree.facultyID LIKE :facultyID')
          ->setParameter('facultyID', $facultyID)
          ->join('facultyDegree.degreeAbbreviation', '')
          ->join('degreeAbbreviation.typeID', 'typeID')
          ->getQuery()
          ->execute();
    }
}