<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Degrees;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DegreeTypeController extends Controller
{

    /**
     * @Route("/degree-types")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $degree_types = $em->getRepository('AppBundle:DegreeType')->findAll();

        return $this->render('degreeType/list.html.twig', [
          'degree_types' => $degree_types
        ]);
    }
}