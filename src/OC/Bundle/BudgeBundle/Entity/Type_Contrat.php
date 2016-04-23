<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Contrat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\Type_ContratRepository")
 */
class Type_Contrat
{
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Contrat", mappedBy="typeContrat")
   */
  private $contrat;
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
     * @ORM\Column(name="desc_type_contrat", type="string", length=255)
     */
    private $descTypeContrat;


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
     * Set descTypeContrat
     *
     * @param string $descTypeContrat
     * @return Type_Contrat
     */
    public function setDescTypeContrat($descTypeContrat)
    {
        $this->descTypeContrat = $descTypeContrat;

        return $this;
    }

    /**
     * Get descTypeContrat
     *
     * @return string 
     */
    public function getDescTypeContrat()
    {
        return $this->descTypeContrat;
    }
}
