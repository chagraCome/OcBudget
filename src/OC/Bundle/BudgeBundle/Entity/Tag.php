<?php

namespace OC\Bundle\BudgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\Bundle\BudgeBundle\Entity\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="label_tag", type="string", length=255)
     */
    private $labelTag;

    /**
     * @var string
     *
     * @ORM\Column(name="head", type="string", length=255)
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
     * Set labelTag
     *
     * @param string $labelTag
     * @return Tag
     */
    public function setLabelTag($labelTag)
    {
        $this->labelTag = $labelTag;

        return $this;
    }

    /**
     * Get labelTag
     *
     * @return string 
     */
    public function getLabelTag()
    {
        return $this->labelTag;
    }

    /**
     * Set head
     *
     * @param string $head
     * @return Tag
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
}
