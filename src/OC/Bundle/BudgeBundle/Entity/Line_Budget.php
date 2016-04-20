<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Line_Budget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\Line_BudgetRepository")
 */
class Line_Budget
{
   /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Consommation", mappedBy="Line_Budget")
   */ 
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Budget_taged", mappedBy="Line_Budget")
   */ 
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Budget", mappedBy="Line_Budget")
   */ 
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Program")
     *@ORM\JoinColumn(nullable=false)
      */
     private $budget_taged;
    private $budget;
    private $program;
    private $consammation;
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
     * @ORM\Column(name="article", type="string", length=5)
     */
    private $article;

    /**
     * @var string
     *
     * @ORM\Column(name="parag", type="string", length=5)
     */
    private $parag;

    /**
     * @var string
     *
     * @ORM\Column(name="s_parag", type="string", length=3)
     */
    private $sParag;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=3)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="label_line", type="string", length=255)
     */
    private $labelLine;

    /**
     * @var integer
     *
     * @ORM\Column(name="ministere", type="integer")
     */
    private $ministere;


    /**
     * Get id
     *
     * @return integer 
     */
    /**
   * @ORM\ManyToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Classe", inversedBy="Line_Budgets")
     @ORM\JoinTable(name="Line_class")
   */
     /**
   * @ORM\ManyToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Groupement", inversedBy="Line_Budgets")
     @ORM\JoinTable(name="LineGroupement")
   */
  private $classes;
  private $groupements;
  public function __construct()
  {
    $this->classes = new ArrayCollection();
     $this->groupements = new ArrayCollection();
  }
  
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set article
     *
     * @param string $article
     * @return Line_Budget
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set parag
     *
     * @param string $parag
     * @return Line_Budget
     */
    public function setParag($parag)
    {
        $this->parag = $parag;

        return $this;
    }

    /**
     * Get parag
     *
     * @return string 
     */
    public function getParag()
    {
        return $this->parag;
    }

    /**
     * Set sParag
     *
     * @param string $sParag
     * @return Line_Budget
     */
    public function setSParag($sParag)
    {
        $this->sParag = $sParag;

        return $this;
    }

    /**
     * Get sParag
     *
     * @return string 
     */
    public function getSParag()
    {
        return $this->sParag;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Line_Budget
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set labelLine
     *
     * @param string $labelLine
     * @return Line_Budget
     */
    public function setLabelLine($labelLine)
    {
        $this->labelLine = $labelLine;

        return $this;
    }

    /**
     * Get labelLine
     *
     * @return string 
     */
    public function getLabelLine()
    {
        return $this->labelLine;
    }

    /**
     * Set ministere
     *
     * @param integer $ministere
     * @return Line_Budget
     */
    public function setMinistere($ministere)
    {
        $this->ministere = $ministere;

        return $this;
    }

    /**
     * Get ministere
     *
     * @return integer 
     */
    public function getMinistere()
    {
        return $this->ministere;
    }

    /**
     * Add classes
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Classe $classes
     * @return Line_Budget
     */
    public function addClass(\OC\Bundle\BudgeBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;

        return $this;
    }

    /**
     * Remove classes
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Classe $classes
     */
    public function removeClass(\OC\Bundle\BudgeBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add consammation
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Consommation $consammation
     * @return Line_Budget
     */
    public function addConsammation(\OC\Bundle\BudgeBundle\Entity\Consommation $consammation)
    {
        $this->consammation[] = $consammation;

        return $this;
    }

    /**
     * Remove consammation
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Consommation $consammation
     */
    public function removeConsammation(\OC\Bundle\BudgeBundle\Entity\Consommation $consammation)
    {
        $this->consammation->removeElement($consammation);
    }

    /**
     * Get consammation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsammation()
    {
        return $this->consammation;
    }

    /**
     * Set program
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Program $program
     * @return Line_Budget
     */
    public function setProgram(\OC\Bundle\BudgeBundle\Entity\Program $program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Program 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set budget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Program $budget
     * @return Line_Budget
     */
    public function setBudget(\OC\Bundle\BudgeBundle\Entity\Program $budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Program 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set budget_taged
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Program $budgetTaged
     * @return Line_Budget
     */
    public function setBudgetTaged(\OC\Bundle\BudgeBundle\Entity\Program $budgetTaged)
    {
        $this->budget_taged = $budgetTaged;

        return $this;
    }

    /**
     * Get budget_taged
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Program 
     */
    public function getBudgetTaged()
    {
        return $this->budget_taged;
    }
}
