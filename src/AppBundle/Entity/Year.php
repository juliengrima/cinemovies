<?php

namespace AppBundle\Entity;

/**
 * Year
 */
class Year
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $releaseDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set releaseDate
     *
     * @param integer $releaseDate
     *
     * @return Year
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return int
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
}

