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
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Contrat", mappedBy="Type_Contrat")
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrat
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Contrat $contrat
     *
     * @return Type_Contrat
     */
    public function addContrat(\OC\Bundle\BudgeBundle\Entity\Contrat $contrat)
    {
        $this->contrat[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Contrat $contrat
     */
    public function removeContrat(\OC\Bundle\BudgeBundle\Entity\Contrat $contrat)
    {
        $this->contrat->removeElement($contrat);
    }
  

    /**
     * Get contrat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Type_Contrat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
