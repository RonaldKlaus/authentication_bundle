<?php

namespace Auth\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {	
    	$request = $this->getRequest();
    	if ($request->getMethod() == 'POST') {
    		$email = $request->get('loginEmail');
    		$password = $request->get('loginPassword');
    		$em = $this->getDoctrine()->getEntityManager();
    		$repository = $em->getRepository("AuthLoginBundle:Users");

    		//Looking in DB
    		$user = $repository->findOneBy(array("email" => $email, "password" => $password));

    		//checking
    		if ($user) 	return $this->render('AuthLoginBundle:Default:login.html.twig', array('name' => $user->getFirstname()));
        
    	}

    	return $this->render('AuthLoginBundle:Default:login.html.twig', array('error' =>"Login Failed"));
    }
}
