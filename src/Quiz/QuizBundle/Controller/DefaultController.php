<?php

namespace Quiz\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Quiz\QuizBundle\Loader\Loader;
use Symfony\Component\HttpFoundation\Request;
use Quiz\QuizBundle\Model\ChoiceQuestion;
use Quiz\QuizBundle\Form\setType;
use Quiz\QuizBundle\Model\Set;

class DefaultController extends Controller {

    public function indexAction() {
        $categories = Loader::getCategories();
        $number = 20;
        $set = Loader::init($number, $categories);
        $session = $this->getRequest()->getSession();
        $session->set('quiz', $set);
        return $this->render('QuizQuizBundle:Default:index.html.twig', array(
                    "set" => $set));
    }

    public function postFormAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $set = $session->get('quiz');
        $answers = $request->request->all();
        $questions = $set->getQuestions()->getValues();
        $result = [];
        $j = 1;
        foreach ($questions as $key => $question) {
            if (isset($answers['question' . $j])) {
                $set->setAnswer($key, $answers['question' . $j]);
            }
            $choiceQuestion = new ChoiceQuestion($question, $answers['question' . $j]);
            $j++;
            $result[] = $choiceQuestion;
        }
        return $this->render('QuizQuizBundle:Default:result.html.twig', array('result' => $result));
    }

    /**
     * Returns configuration file path
     *
     * @return  String       $path      The configuration filepath
     */
    protected function path() {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Resources/config/quiz_config.yml';
    }

    /**
     * Creates a form to create a Exprience entity.
     *
     * @param Exprience $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Set $set) {
        $form = $this->createForm(new setType(), $set, array(
            'action' => $this->generateUrl('quiz_quiz_post_form'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

}
