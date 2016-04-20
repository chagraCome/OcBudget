<?php

namespace OC\Bundle\BudgeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Groupement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\GroupementRepository")
 */
class Groupement
{
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
     * @ORM\Column(name="label_groupement", type="string", length=255)
     */
    private $labelGroupement;


    /**
     * Get id
     *
     * @return integer 
     */
    /**
   * @ORM\ManyToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget", mappedBy="Groupements")

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
     * Set labelGroupement
     *
     * @param string $labelGroupement
     * @return Groupement
     */
    public function setLabelGroupement($labelGroupement)
    {
        $this->labelGroupement = $labelGroupement;

        return $this;
    }

    /**
     * Get labelGroupement
     *
     * @return string 
     */
    public function getLabelGroupement()
    {
        return $this->labelGroupement;
    }

    /**
     * Add Line_Budgets
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudgets
     * @return Groupement
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
