<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consommation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\ConsommationRepository")
 */
class Consommation
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
     * @ORM\Column(name="ordonnance_engagement", type="float")
     */
    private $ordonnanceEngagement;

    /**
     * @var float
     *
     * @ORM\Column(name="ordonnance_payement", type="float")
     */
    private $ordonnancePayement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_lecture", type="datetime")
     */
    private $dateLecture;


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
     * @return Consommation
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
     * Set ordonnanceEngagement
     *
     * @param float $ordonnanceEngagement
     * @return Consommation
     */
    public function setOrdonnanceEngagement($ordonnanceEngagement)
    {
        $this->ordonnanceEngagement = $ordonnanceEngagement;

        return $this;
    }

    /**
     * Get ordonnanceEngagement
     *
     * @return float 
     */
    public function getOrdonnanceEngagement()
    {
        return $this->ordonnanceEngagement;
    }

    /**
     * Set ordonnancePayement
     *
     * @param float $ordonnancePayement
     * @return Consommation
     */
    public function setOrdonnancePayement($ordonnancePayement)
    {
        $this->ordonnancePayement = $ordonnancePayement;

        return $this;
    }

    /**
     * Get ordonnancePayement
     *
     * @return float 
     */
    public function getOrdonnancePayement()
    {
        return $this->ordonnancePayement;
    }

    /**
     * Set dateLecture
     *
     * @param \DateTime $dateLecture
     * @return Consommation
     */
    public function setDateLecture($dateLecture)
    {
        $this->dateLecture = $dateLecture;

        return $this;
    }

    /**
     * Get dateLecture
     *
     * @return \DateTime 
     */
    public function getDateLecture()
    {
        return $this->dateLecture;
    }

    /**
     * Set line_budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     * @return Consommation
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
