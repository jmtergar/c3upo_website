<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function indexAction(Request $request)
    {
        
        // redirect to registration page
//        return $this->redirectToRoute('registrationRegister');
        return $this->render('AppBundle::index.html.twig');
    }
}
