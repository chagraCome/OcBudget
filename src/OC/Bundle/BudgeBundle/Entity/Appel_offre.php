<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appel_offre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\Appel_offreRepository")
 */
class Appel_offre
{
    /**
     * @ORM\ManyToOne(targetEntity="OC\Bundle\BudgeBundle\Entity\Ministere")
     *@ORM\JoinColumn(nullable=false)
      */
     private $ministere;
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
     * @ORM\Column(name="label_appel_offre", type="string", length=255)
     */
    private $labelAppelOffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limite_deposer", type="datetime")
     */
    private $dateLimiteDeposer;


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
     * Set labelAppelOffre
     *
     * @param string $labelAppelOffre
     * @return Appel_offre
     */
    public function setLabelAppelOffre($labelAppelOffre)
    {
        $this->labelAppelOffre = $labelAppelOffre;

        return $this;
    }

    /**
     * Get labelAppelOffre
     *
     * @return string 
     */
    public function getLabelAppelOffre()
    {
        return $this->labelAppelOffre;
    }

    /**
     * Set dateLimiteDeposer
     *
     * @param \DateTime $dateLimiteDeposer
     * @return Appel_offre
     */
    public function setDateLimiteDeposer($dateLimiteDeposer)
    {
        $this->dateLimiteDeposer = $dateLimiteDeposer;

        return $this;
    }

    /**
     * Get dateLimiteDeposer
     *
     * @return \DateTime 
     */
    public function getDateLimiteDeposer()
    {
        return $this->dateLimiteDeposer;
    }

    /**
     * Set ministere
     *
     * @param \OC\Bundle\BudgeBundle\Entity\Ministere $ministere
     * @return Appel_offre
     */
    public function setMinistere(\OC\Bundle\BudgeBundle\Entity\Ministere $ministere)
    {
        $this->ministere = $ministere;

        return $this;
    }

    /**
     * Get ministere
     *
     * @return \OC\Bundle\BudgeBundle\Entity\Ministere 
     */
    public function getMinistere()
    {
        return $this->ministere;
    }
}
