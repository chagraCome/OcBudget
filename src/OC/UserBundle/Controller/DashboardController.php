<?php

namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function dashboardAction()
    {
        $user = $this->getUser();
        if(!$user) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        
        return $this->render('OCUserBundle:Dashboard:dashboard.html.twig');
    }
}
