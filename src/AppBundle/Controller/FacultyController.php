<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Degrees;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class FacultyController extends Controller
{

    /**
     * @Route("/faculty-list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $faculty = $em->getRepository('FacultyDegrees')->findAll();

        return $this->render('facultyDegrees/list.html.twig',[
          'faculty_list' => $faculty,
          ]);
    }
}