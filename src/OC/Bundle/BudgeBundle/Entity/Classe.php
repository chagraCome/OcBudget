<?php

namespace OC\Bundle\BudgeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * class
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\classRepository")
 */
class Classe
{
     /**
   * @ORM\ManyToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget", mapedBy="Classes")

   */
 
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
     * @ORM\Column(name="label_class", type="string", length=255)
     */
    private $labelClass;


    /**
     * Get id
     *
     * @return integer 
     */
      /**
   * @ORM\ManyToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget", mappedBy="Classes")

   */
     private $Line_Budgets;
     public function __construct()
  {
    $this->Line_Budgets = new ArrayCollection();
  }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set labelClass
     *
     * @param string $labelClass
     * @return class
     */
    public function setLabelClass($labelClass)
    {
        $this->labelClass = $labelClass;

        return $this;
    }

    /**
     * Get labelClass
     *
     * @return string 
     */
    public function getLabelClass()
    {
        return $this->labelClass;
    }

    /**
     * Add Line_Budgets
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudgets
     * @return Classe
     */
    public function addLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudgets)
    {
        $this->Line_Budgets[] = $lineBudgets;

        return $this;
    }

    /**
     * Remove Line_Budgets
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudgets
     */
    public function removeLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudgets)
    {
        $this->Line_Budgets->removeElement($lineBudgets);
    }

    /**
     * Get Line_Budgets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineBudgets()
    {
        return $this->Line_Budgets;
    }
}
