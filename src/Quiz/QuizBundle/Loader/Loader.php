<?php

namespace Quiz\QuizBundle\Loader;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;
use Quiz\QuizBundle\Model\Answer;
use Quiz\QuizBundle\Model\Question;
use Quiz\QuizBundle\Model\Set;

class Loader {

    /**
     * @var integer
     */
    static public $count;

    /**
     * Returns a new set of randomized questions
     *
     * @param integer $number
     * @param array   $categories
     *
     * @return Set
     */
    static public function init($number, array $categories) {
        $data = self::prepareFromYaml($categories);

        if (!$data) {
            return new Set(array());
        }

        $dataMax = count($data) - 1;

        $questions = array();

        for ($i = 0; $i < $number; $i++) {
            do {
                $random = rand(0, $dataMax);
            } while (isset($questions[$random]) && count($questions) < $dataMax);

            $item = $data[$random];
            $answers = array();

            foreach ($item['answers'] as $dataAnswer) {
                $answers[] = new Answer($dataAnswer['value'], $dataAnswer['correct']);
            }
            
            if (!isset($item['shuffle']) || true === $item['shuffle']) {
                shuffle($answers);
            }

            $questions[$random] = new Question($item['question'], $item['category'], $answers, $item['id']);
        }
        return new Set($questions);
    }

    /**
     * Counts total of available questions
     *
     * @return integer
     */
    static public function count() {
        return self::$count ? : count(self::prepareFromYaml());
    }

    /**
     * Prepares data from Yaml files and returns an array of questions
     *
     * @param array $categories : List of categories which should be included, empty array = all
     *
     * @return array
     */
    static protected function prepareFromYaml(array $categories = array()) {
        $data = array();
        self::$count = 0;
        $path = self::path();
        $pathsContents = Yaml::parse(file_get_contents($path));
        $paths = $pathsContents['paths'];
        $dir = __DIR__ . '/../';
        foreach ($paths as $path) {
            $files = Finder::create()->files()->in($dir . $path)->name('*.yml');

            foreach ($files as $file) {
                $fileData = Yaml::parse($file->getContents());
                $category = $fileData['category'];
                if (count($categories) == 0 || in_array($category, $categories)) {
                    array_walk($fileData['questions'], function (&$item, $key) use ($category) {
                        $item['category'] = $category;
                    });

                    $data = array_merge($data, $fileData['questions']);
                }
            }

            self::$count += count($data);
        }
        return $data;
    }

    /**
     * Get list of all categories
     *
     * @return array
     */
    static public function getCategories() {
        $categories = array();
        $files = self::prepareFromYaml(array());
        foreach ($files as $file) {
            $categories[] = $file['category'];
        }

        return array_unique($categories);
    }

    /**
     * Returns configuration file path
     *
     * @return  String       $path      The configuration filepath
     */
    static protected function path() {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Resources/config/quiz_config.yml';
    }

}
