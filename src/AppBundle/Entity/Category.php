<?php

namespace AppBundle\Entity;

/**
 * Category
 */
class Category
{

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->category;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category;

    /**
     * @var \AppBundle\Entity\Header
     */
    private $header;

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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($category)
    {
        $this->name = $category;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->category;
    }

    /**
     * Set header
     *
     * @param \AppBundle\Entity\Header $header
     *
     * @return Category
     */
    public function setHeader(\AppBundle\Entity\Header $header = null)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get header
     *
     * @return \AppBundle\Entity\Header
     */
    public function getHeader()
    {
        return $this->header;
    }
}
