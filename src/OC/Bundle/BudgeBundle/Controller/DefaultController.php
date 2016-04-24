<?php

namespace OC\Bundle\BudgeBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OCBudgeBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        
if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
//return new Response("hello asma");
// On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('fos_user_security_login'));
    }

        //redirect to home 
    }
}
