<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Degree;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DegreeController extends Controller
{

    /**
     * @Route("/degree-list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $degree_list = $em->getRepository('AppBundle:Degree')->findAll();

        return $this->render('degree/list.html.twig', [
          'degree_list' => $degree_list
        ]);
    }
}