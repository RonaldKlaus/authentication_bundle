<?php

namespace Auth\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    		$email = "ronald.klaus@gmx.net";
    		$password = "test";
    		$em = $this->getDoctrine()->getEntityManager();
    		$repository = $em->getRepository("AuthLoginBundle:Users");

    		//Looking in DB
    		$user = $repository->findOneBy(array("email" => $email, "password" => $password));

    		//checking
    		if ($user)
        	return $this->render('AuthLoginBundle:Default:index.html.twig', array('name' => $user->getFirstname()));
        else
        	return $this->render('AuthLoginBundle:Default:index.html.twig', array('name' =>"Login Failed for ".$email." | ".$password));
    }
}
