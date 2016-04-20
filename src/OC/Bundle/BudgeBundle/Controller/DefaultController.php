<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OCBudgeBundle:Default:index.html.twig', array('name' => $name));
    }
}
