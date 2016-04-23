<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * budget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\BudgetRepository")
 */
class Budget
{
     /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget")
     *@ORM\JoinColumn(nullable=false)
     
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
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var float
     *
     * @ORM\Column(name="creditE", type="float")
     */
    private $creditE;

    /**
     * @var float
     *
     * @ORM\Column(name="creditP", type="float")
     */
    private $creditP;

    /**
     * @var float
     *
     * @ORM\Column(name="creditCE", type="float")
     */
    private $creditCE;

    /**
     * @var float
     *
     * @ORM\Column(name="creditCP", type="float")
     */
    private $creditCP;


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
     * Set year
     *
     * @param integer $year
     * @return budget
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set creditE
     *
     * @param float $creditE
     * @return budget
     */
    public function setCreditE($creditE)
    {
        $this->creditE = $creditE;

        return $this;
    }

    /**
     * Get creditE
     *
     * @return float 
     */
    public function getCreditE()
    {
        return $this->creditE;
    }

    /**
     * Set creditP
     *
     * @param float $creditP
     * @return budget
     */
    public function setCreditP($creditP)
    {
        $this->creditP = $creditP;

        return $this;
    }

    /**
     * Get creditP
     *
     * @return float 
     */
    public function getCreditP()
    {
        return $this->creditP;
    }

    /**
     * Set creditCE
     *
     * @param float $creditCE
     * @return budget
     */
    public function setCreditCE($creditCE)
    {
        $this->creditCE = $creditCE;

        return $this;
    }

    /**
     * Get creditCE
     *
     * @return float 
     */
    public function getCreditCE()
    {
        return $this->creditCE;
    }

    /**
     * Set creditCP
     *
     * @param float $creditCP
     * @return budget
     */
    public function setCreditCP($creditCP)
    {
        $this->creditCP = $creditCP;

        return $this;
    }

    /**
     * Get creditCP
     *
     * @return float 
     */
    public function getCreditCP()
    {
        return $this->creditCP;
    }

    /**
     * Set line_budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     * @return Budget
     */
    public function setLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget)
    {
        $this->line_budget = $lineBudget;

        return $this;
    }

    /**
     * Get line_budget
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Line_Budget 
     */
    public function getLineBudget()
    {
        return $this->line_budget;
    }
}
