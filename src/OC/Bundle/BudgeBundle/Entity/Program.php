<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Program
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\ProgramRepository")
 */
class Program
{
    /**
     @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget",mappedBy="Program")
     */
    private $line_budget;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label_prog", type="string", length=50)
     */
    private $labelProg;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=2)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="head", type="string", length=2)
     */
    private $head;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set labelProg
     *
     * @param string $labelProg
     * @return Program
     */
    public function setLabelProg($labelProg)
    {
        $this->labelProg = $labelProg;

        return $this;
    }

    /**
     * Get labelProg
     *
     * @return string 
     */
    public function getLabelProg()
    {
        return $this->labelProg;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Program
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set head
     *
     * @param string $head
     * @return Program
     */
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Get head
     *
     * @return string 
     */
    public function getHead()
    {
        return $this->head;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->line_budget = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add line_budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     * @return Program
     */
    public function addLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget)
    {
        $this->line_budget[] = $lineBudget;

        return $this;
    }

    /**
     * Remove line_budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     */
    public function removeLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget)
    {
        $this->line_budget->removeElement($lineBudget);
    }

    /**
     * Get line_budget
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineBudget()
    {
        return $this->line_budget;
    }
}
