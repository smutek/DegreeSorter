<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Degrees;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FacultyDegreeController extends Controller
{

    /**
     * @Route("/faculty")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $faculty_members  = $em->getRepository('AppBundle:FacultyDegree')->findAll();

        return $this->render("facultyDegree/list.html.twig", [
          'faculty_members' => $faculty_members
        ]);
    }
}