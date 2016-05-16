<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddActivityController extends Controller {

    function addactivityAction() {
        return $this->render('OCBudgeBundle:AddActivity:add_activity.html.twig');
    }

}
