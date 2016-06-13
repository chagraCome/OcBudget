<?php

namespace OC\Bundle\BudgeBundle\Entity;

/**
 * Mouvement
 */
class Mouvement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeMouvement;

    /**
     * @var \DateTime
     */
    private $dateMouvement;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var integer
     */
    private $loF;

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
     * Set typeMouvement
     *
     * @param string $typeMouvement
     *
     * @return Mouvement
     */
    public function setTypeMouvement($typeMouvement)
    {
        $this->typeMouvement = $typeMouvement;

        return $this;
    }

    /**
     * Get typeMouvement
     *
     * @return string
     */
    public function getTypeMouvement()
    {
        return $this->typeMouvement;
    }

    /**
     * Set dateMouvement
     *
     * @param \DateTime $dateMouvement
     *
     * @return Mouvement
     */
    public function setDateMouvement($dateMouvement)
    {
        $this->dateMouvement = $dateMouvement;

        return $this;
    }

    /**
     * Get dateMouvement
     *
     * @return \DateTime
     */
    public function getDateMouvement()
    {
        return $this->dateMouvement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Mouvement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set loF
     *
     * @param integer $loF
     *
     * @return Mouvement
     */
    public function setLoF($loF)
    {
        $this->loF = $loF;

        return $this;
    }

    /**
     * Get loF
     *
     * @return integer
     */
    public function getLoF()
    {
        return $this->loF;
    }

}
