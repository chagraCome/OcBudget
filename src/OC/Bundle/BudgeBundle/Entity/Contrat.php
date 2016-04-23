<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\ContratRepository")
 */
class Contrat
{
    /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Type_Contrat")
     *@ORM\JoinColumn(nullable=false)
     
     */
    /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Budget_taged")
     *@ORM\JoinColumn(nullable=false)
     */
    private $budget_taged;
    private $type_contrat;
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
     * @ORM\Column(name="label_contrat", type="string", length=255)
     */
    private $labelContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_contrat", type="datetime")
     */
    private $dateDebContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_contrat", type="datetime")
     */
    private $dateFinContrat;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


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
     * Set labelContrat
     *
     * @param string $labelContrat
     * @return Contrat
     */
    public function setLabelContrat($labelContrat)
    {
        $this->labelContrat = $labelContrat;

        return $this;
    }

    /**
     * Get labelContrat
     *
     * @return string 
     */
    public function getLabelContrat()
    {
        return $this->labelContrat;
    }

    /**
     * Set dateDebContrat
     *
     * @param \DateTime $dateDebContrat
     * @return Contrat
     */
    public function setDateDebContrat($dateDebContrat)
    {
        $this->dateDebContrat = $dateDebContrat;

        return $this;
    }

    /**
     * Get dateDebContrat
     *
     * @return \DateTime 
     */
    public function getDateDebContrat()
    {
        return $this->dateDebContrat;
    }

    /**
     * Set dateFinContrat
     *
     * @param \DateTime $dateFinContrat
     * @return Contrat
     */
    public function setDateFinContrat($dateFinContrat)
    {
        $this->dateFinContrat = $dateFinContrat;

        return $this;
    }

    /**
     * Get dateFinContrat
     *
     * @return \DateTime 
     */
    public function getDateFinContrat()
    {
        return $this->dateFinContrat;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Contrat
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set type_contrat
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Type_Contrat $typeContrat
     * @return Contrat
     */
    public function setTypeContrat(\OC\Bundle\BudgeBundle\Entity\Type_Contrat $typeContrat)
    {
        $this->type_contrat = $typeContrat;

        return $this;
    }

    /**
     * Get type_contrat
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Type_Contrat 
     */
    public function getTypeContrat()
    {
        return $this->type_contrat;
    }

    /**
     * Set budget_taged
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Budget_taged $budgetTaged
     * @return Contrat
     */
    public function setBudgetTaged(\OC\Bundle\BudgeBundle\Entity\Budget_taged $budgetTaged)
    {
        $this->budget_taged = $budgetTaged;

        return $this;
    }

    /**
     * Get budget_taged
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Budget_taged 
     */
    public function getBudgetTaged()
    {
        return $this->budget_taged;
    }
}
