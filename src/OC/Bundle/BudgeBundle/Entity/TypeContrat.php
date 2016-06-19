<?php

namespace OC\Bundle\BudgeBundle\Entity;

/**
 * TypeContrat
 */
class TypeContrat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
     *
     * @return TypeContrat
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

