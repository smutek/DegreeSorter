<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Degrees;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RandomFacultyController extends Controller
{

    /**
     * @param $facultyID
     * @Route("/faculty/{facultyName}")
     */
    public function showAction($facultyID)
    {
        $em = $this->getDoctrine()->getManager();

    }
}