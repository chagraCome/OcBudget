<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('OCBudgeBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction() {
        $user = $this->getUser();
        $securityContext = $this->container->get('security.authorization_checker');

        if (!$user) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        } else {
            return $this->redirect($this->generateUrl('oc_user_dashboard'));
        }
    }

}
