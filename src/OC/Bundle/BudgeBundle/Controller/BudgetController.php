<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BudgetController extends Controller {

    function budgetAction() {
       
        return $this->render('OCBudgeBundle:Budget:budget.html.twig');
        
    }
function showAction() {
  /*  $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT b
    FROM OCBundleBudgeBundle:Budget b'
);

$budgets = $query->getResult();*/
    $repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('OCBudgeBundle:Line_Budget')
;

$LineBudgets = $repository->findAll();
 return $this->render(
        'OCBudgeBundle:Budget:budget.html.twig',
        array('LineBudgets' => $LineBudgets)
    );
/*foreach ($listLineBudgets as $line) {
  // $advert est une instance de Advert
  echo $line->getContent();}*/
}
}

