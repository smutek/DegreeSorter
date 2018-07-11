<?php
namespace AppBundle\Controller;

use AppBundle\Entity\FacultyDegree;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FacultyDegreeController
 *
 * @package AppBundle\Controller
 */
class FacultyDegreeController extends Controller
{

    /**
     * @Route("/faculty")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        dump($em->getRepository('AppBundle:FacultyDegree'));

        $faculty_members = $em->getRepository('AppBundle:FacultyDegree')->findAll();

        return $this->render("facultyDegree/list.html.twig", [
          'faculty_members' => $faculty_members
        ]);
    }

    /**
     * @Route("/faculty/{facultyID}", name="faculty_show")
     */
    public function showAction($facultyID)
    {

        dump($facultyID);

        $em = $this->getDoctrine()->getManager();

        $faculty = $em->getRepository('AppBundle:FacultyDegree')
                      ->findOneBy(['facultyID' => $facultyID]);

        $degrees = $em->getRepository('AppBundle:FacultyDegree')
          ->findAllDegreesForFacultyID($facultyID);

        return $this->render('facultyDegree/show.html.twig',
          [
            'faculty' => $faculty,
              'degrees' => $degrees
          ]);
    }
}