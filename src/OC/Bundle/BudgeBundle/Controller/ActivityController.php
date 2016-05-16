<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivityController extends Controller {

    function activityAction() {
        return $this->render('OCBudgeBundle:Activity:activity.html.twig');
    }

}
