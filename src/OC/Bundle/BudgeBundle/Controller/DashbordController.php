<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashbordController extends Controller {

function dashbordAction()
    {
    return $this->render('OCBudgeBundle:Dashbord:dashbord.html.twig');
}

}
