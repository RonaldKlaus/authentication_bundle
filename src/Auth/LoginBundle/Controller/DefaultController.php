<?php

namespace Auth\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Auth\LoginBundle\Entity\Users;

class DefaultController extends Controller
{
    public function indexAction()
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

    public function signupAction() {
    	$request = $this->getRequest();
    	if ($request->getMethod() == 'POST') {
    		$firstname = $request->get('signupFirstname');
    		$lastname = $request->get('signupLastname');
    		$email = $request->get('signupEmail');
    		$password = $request->get('signupPassword');
    		$gender = $request->get('signupGender');
    		// NOW WE CAN USE THE USERS-ENTITY
    		$user = new Users();
    		$user->setFirstname($firstname);
    		$user->setLastname($lastname);
    		$user->setEmail($email);
    		$user->setPassword($password);
    		$user->setGender($gender);
    		// get entity-manager
    		$em = $this->getDoctrine()->getEntityManager();
    		// add entity
    		$em->persist($user);
    		// create in DB
    		$em->flush();
    	}
    	return $this->render('AuthLoginBundle:Default:signup.html.twig');
    }
}
