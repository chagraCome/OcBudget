<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use OC\UserBundle\Entity\User;

class DashbordController extends Controller {

    function dashbordAction() {
        //return $this->render('OCBudgeBundle:Dashbord:dashbord.html.twig');
        $user = $this->getUser();
        
        if (!is_object($user) && !($user instanceof User)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'select b
    FROM OCBudgeBundle:Classe b
    '
        );

        $programes = $query->getResult();
        return $this->render('OCBudgeBundle:Dashbord:dashbord.html.twig', 
                array(
                    'programes' => $programes,
                    'user' => $user
                ));
    }

}
