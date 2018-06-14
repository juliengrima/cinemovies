<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 14/06/2018
 * Time: 21:54
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    //    CONFIDENTIAL POLITIC
    public function politicAction()
    {
        return $this->render('politic/politic.html.twig');
    }

//    CONFIDENTIAL POLITIC
    public function termsAction()
    {
        return $this->render('politic/terms.html.twig');
    }

//    ABOUT
    public function aboutAction()
    {
        return $this->render('politic/about.html.twig');
    }

}