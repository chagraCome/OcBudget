<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashbordController extends Controller {

function dashbordAction()
    {
    //return $this->render('OCBudgeBundle:Dashbord:dashbord.html.twig');
  $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'select b
    FROM OCBudgeBundle:Classe b
    '
);

$programes = $query->getResult();
    return $this->render('OCBudgeBundle:Dashbord:dashbord.html.twig',array('programes' => $programes));
        
}

}
