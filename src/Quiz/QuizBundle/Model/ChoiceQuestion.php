<?php

namespace Quiz\QuizBundle\Model;

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Quiz\QuizBundle\Model\Question;

class ChoiceQuestion {

    /**
     * @var Choices[]
     */
    private $choices;
    private $question;
    private $resultQuestion;

    /**
     * Constructor
     *
     * @param Question[] $questions
     */
    public function __construct($question, array $choices) {
        $this->question = $question;
        $this->choices = $choices;
        $this->resultQuestion = $question->areCorrectAnswers($choices);
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function getChoices() {
        return $this->choices;
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function setChoices(array $choices) {
        return $this->choices = $choices;
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function setQuestion(Question $question) {
        return $this->question = $question;
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function getQuestion() {
        return $this->question;
    }

    /**
     * Returns available choices.
     *
     * @return array
     */
    public function getResultQuestion() {
        return $this->resultQuestion;
    }

}
