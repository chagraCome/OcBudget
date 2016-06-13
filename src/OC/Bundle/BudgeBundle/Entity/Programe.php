<?php

namespace OC\Bundle\BudgeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Programe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\ProgrameRepository")
 */
class Programe
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
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Line_Budget", mappedBy="Programe")
   */ 
    private $line_budget;
    
    /**
     * @var string
     *
     * @ORM\Column(name="labelProg", type="string", length=50)
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
     * @return Programe
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
     * @return Programe
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
     * @return Programe
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
        parent::__construct();
    }

  

    /**
     * Add lineBudget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     *
     * @return Programe
     */
    public function addLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget)
    {
        $this->line_budget[] = $lineBudget;

        return $this;
    }

    /**
     * Remove lineBudget
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget
     */
    public function removeLineBudget(\OC\Bundle\BudgeBundle\Entity\Line_Budget $lineBudget)
    {
        $this->line_budget->removeElement($lineBudget);
    }

    /**
     * Get lineBudget
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLineBudget()
    {
        return $this->line_budget;
    }
}
