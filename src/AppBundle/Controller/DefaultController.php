<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use ffmpeg_movie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

//    DEFAULTCNTROLLER USING FOR ALL RENDER WITH NO CRUD

//    HOMEPAGE
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $randomMovies = $em->getRepository('AppBundle:Movies')->findAll ();
        $movies = $em->getRepository('AppBundle:Movies')->findBy( array('slider' => 1));
        $agenda = $em->getRepository('CalendarBundle:Agenda')->findBy( array('slider' => 1) );

        return $this->render('default/index.html.twig', array(
            'randomMovies' => $randomMovies,
            'movies' => $movies,
            'agendas' => $agenda,
        ));
    }
}
