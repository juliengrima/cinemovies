<?php

namespace AppBundle\Entity;

/**
 * Resume
 */
class Resume
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $actors;


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
     * Set resume
     *
     * @param string $resume
     *
     * @return Resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Resume
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set actors
     *
     * @param string $actors
     *
     * @return Resume
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string
     */
    public function getActors()
    {
        return $this->actors;
    }
}

