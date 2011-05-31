<?php

namespace vendor\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('vendorappBundle:Main:index.html.twig');
    }
    
    public function welcomeAction()
    {
        return $this->render('vendorappBundle:Main:welcome.html.twig');
    }
}
