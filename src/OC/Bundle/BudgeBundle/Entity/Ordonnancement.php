<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnancement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\OrdonnancementRepository")
 */
class Ordonnancement
{
       /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Budget_taged")
     *@ORM\JoinColumn(nullable=false)
     */
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    private $budget_taged;
    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var float
     *
     * @ORM\Column(name="pay", type="float")
     */
    private $pay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float")
     */
    private $cout;


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
     * @return ordonnancement
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
     * Set pay
     *
     * @param float $pay
     * @return ordonnancement
     */
    public function setPay($pay)
    {
        $this->pay = $pay;

        return $this;
    }

    /**
     * Get pay
     *
     * @return float 
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ordonnancement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set cout
     *
     * @param float $cout
     * @return ordonnancement
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return float 
     */
    public function getCout()
    {
        return $this->cout;
    }
}
