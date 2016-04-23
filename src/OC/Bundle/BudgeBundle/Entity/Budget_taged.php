<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * budget_taged
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\Budget_tagedRepository")
 */
class Budget_taged
{
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Contrat", mappedBy="Budget_taged")
   */ 
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Ordonnancement", mappedBy="Budget_taged")
   */ 
     /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget")
     *@ORM\JoinColumn(nullable=false)
      */
    private $contrat;
    private $ordonnancement;
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
     * @ORM\Column(name="flag_budget", type="string", length=1)
     */
    private $flagBudget;

    /**
     * @var string
     *
     * @ORM\Column(name="tag1", type="string", length=255)
     */
    private $tag1;

    /**
     * @var string
     *
     * @ORM\Column(name="tag2", type="string", length=255)
     */
    private $tag2;

    /**
     * @var string
     *
     * @ORM\Column(name="tag3", type="string", length=255)
     */
    private $tag3;

    /**
     * @var string
     *
     * @ORM\Column(name="tag4", type="string", length=255)
     */
    private $tag4;

    /**
     * @var string
     *
     * @ORM\Column(name="tag5", type="string", length=255)
     */
    private $tag5;

    /**
     * @var string
     *
     * @ORM\Column(name="tag6", type="string", length=255)
     */
    private $tag6;

    /**
     * @var string
     *
     * @ORM\Column(name="tag7", type="string", length=255)
     */
    private $tag7;

    /**
     * @var string
     *
     * @ORM\Column(name="tag8", type="string", length=255)
     */
    private $tag8;

    /**
     * @var string
     *
     * @ORM\Column(name="tag9", type="string", length=255)
     */
    private $tag9;

    /**
     * @var string
     *
     * @ORM\Column(name="tag10", type="string", length=255)
     */
    private $tag10;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_min", type="datetime")
     */
    private $dateMin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_max", type="datetime")
     */
    private $dateMax;


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
     * Set flagBudget
     *
     * @param string $flagBudget
     * @return budget_taged
     */
    public function setFlagBudget($flagBudget)
    {
        $this->flagBudget = $flagBudget;

        return $this;
    }

    /**
     * Get flagBudget
     *
     * @return string 
     */
    public function getFlagBudget()
    {
        return $this->flagBudget;
    }

    /**
     * Set tag1
     *
     * @param string $tag1
     * @return budget_taged
     */
    public function setTag1($tag1)
    {
        $this->tag1 = $tag1;

        return $this;
    }

    /**
     * Get tag1
     *
     * @return string 
     */
    public function getTag1()
    {
        return $this->tag1;
    }

    /**
     * Set tag2
     *
     * @param string $tag2
     * @return budget_taged
     */
    public function setTag2($tag2)
    {
        $this->tag2 = $tag2;

        return $this;
    }

    /**
     * Get tag2
     *
     * @return string 
     */
    public function getTag2()
    {
        return $this->tag2;
    }

    /**
     * Set tag3
     *
     * @param string $tag3
     * @return budget_taged
     */
    public function setTag3($tag3)
    {
        $this->tag3 = $tag3;

        return $this;
    }

    /**
     * Get tag3
     *
     * @return string 
     */
    public function getTag3()
    {
        return $this->tag3;
    }

    /**
     * Set tag4
     *
     * @param string $tag4
     * @return budget_taged
     */
    public function setTag4($tag4)
    {
        $this->tag4 = $tag4;

        return $this;
    }

    /**
     * Get tag4
     *
     * @return string 
     */
    public function getTag4()
    {
        return $this->tag4;
    }

    /**
     * Set tag5
     *
     * @param string $tag5
     * @return budget_taged
     */
    public function setTag5($tag5)
    {
        $this->tag5 = $tag5;

        return $this;
    }

    /**
     * Get tag5
     *
     * @return string 
     */
    public function getTag5()
    {
        return $this->tag5;
    }

    /**
     * Set tag6
     *
     * @param string $tag6
     * @return budget_taged
     */
    public function setTag6($tag6)
    {
        $this->tag6 = $tag6;

        return $this;
    }

    /**
     * Get tag6
     *
     * @return string 
     */
    public function getTag6()
    {
        return $this->tag6;
    }

    /**
     * Set tag7
     *
     * @param string $tag7
     * @return budget_taged
     */
    public function setTag7($tag7)
    {
        $this->tag7 = $tag7;

        return $this;
    }

    /**
     * Get tag7
     *
     * @return string 
     */
    public function getTag7()
    {
        return $this->tag7;
    }

    /**
     * Set tag8
     *
     * @param string $tag8
     * @return budget_taged
     */
    public function setTag8($tag8)
    {
        $this->tag8 = $tag8;

        return $this;
    }

    /**
     * Get tag8
     *
     * @return string 
     */
    public function getTag8()
    {
        return $this->tag8;
    }

    /**
     * Set tag9
     *
     * @param string $tag9
     * @return budget_taged
     */
    public function setTag9($tag9)
    {
        $this->tag9 = $tag9;

        return $this;
    }

    /**
     * Get tag9
     *
     * @return string 
     */
    public function getTag9()
    {
        return $this->tag9;
    }

    /**
     * Set tag10
     *
     * @param string $tag10
     * @return budget_taged
     */
    public function setTag10($tag10)
    {
        $this->tag10 = $tag10;

        return $this;
    }

    /**
     * Get tag10
     *
     * @return string 
     */
    public function getTag10()
    {
        return $this->tag10;
    }

    /**
     * Set dateMin
     *
     * @param \DateTime $dateMin
     * @return budget_taged
     */
    public function setDateMin($dateMin)
    {
        $this->dateMin = $dateMin;

        return $this;
    }

    /**
     * Get dateMin
     *
     * @return \DateTime 
     */
    public function getDateMin()
    {
        return $this->dateMin;
    }

    /**
     * Set dateMax
     *
     * @param \DateTime $dateMax
     * @return budget_taged
     */
    public function setDateMax($dateMax)
    {
        $this->dateMax = $dateMax;

        return $this;
    }

    /**
     * Get dateMax
     *
     * @return \DateTime 
     */
    public function getDateMax()
    {
        return $this->dateMax;
    }

    /**
     * Set line_budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     * @return Budget_taged
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

    /**
     * Set contrat
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $contrat
     * @return Budget_taged
     */
    public function setContrat(\OC\Bundle\BudgeBundle\Entity\Line_Budget $contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Line_Budget 
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}
