<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BudgetController extends Controller {

    function budgetAction() {
        return $this->render('OCBudgeBundle:Budget:budget.html.twig');
    }

}

