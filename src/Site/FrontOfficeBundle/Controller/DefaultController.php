<?php

namespace Site\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
        return $this->render('front/index.html.twig');
    }
}
