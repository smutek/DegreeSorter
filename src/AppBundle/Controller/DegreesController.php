<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Degrees;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DegreesController extends Controller
{

    /**
     * @Route("/degrees")
     */
    public function listAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $degrees = $em->getRepository('AppBundle:Degrees')->findAll();

        return $this->render('degrees/list.html.twig', [
          'degrees' => $degrees,
        ]);
    }
}