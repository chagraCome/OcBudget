<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\Bundle\BudgeBundle\Entity\Activity;
use OC\Bundle\BudgeBundle\Form\ActivityType;
class AddActivityController extends Controller {

    function addactivityAction() {
        $Activity=new Activity();
        $form=$this->createForm(new ActivityType(), $Activity);
        return $this->render('OCBudgeBundle:AddActivity:add_activity.html.twig',array('form'=>$form->createView()));
    }

}
