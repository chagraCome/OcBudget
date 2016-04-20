<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ministere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\ministereRepository")
 */
class Ministere
{
    /**
   * @ORM\OneToMany(targetEntity="OC\Bundle\BudgeBundle\Entity\Appel_offre", mappedBy="Ministere")
   */ 
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $appel_offre;
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ministere", type="string", length=100)
     */
    private $nomMinistere;


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
     * Set nomMinistere
     *
     * @param string $nomMinistere
     * @return ministere
     */
    public function setNomMinistere($nomMinistere)
    {
        $this->nomMinistere = $nomMinistere;

        return $this;
    }

    /**
     * Get nomMinistere
     *
     * @return string 
     */
    public function getNomMinistere()
    {
        return $this->nomMinistere;
    }

    /**
     * Get appel_offre
     *
     * @return integer 
     */
    public function getAppelOffre()
    {
        return $this->appel_offre;
    }
}
