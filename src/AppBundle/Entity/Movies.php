<?php

namespace AppBundle\Entity;

/**
 * Movies
 */
class Movies
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $movies;

    /**
     * @var \DateTime
     */
    private $year;


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
     * Set movies
     *
     * @param string $movies
     *
     * @return Movies
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * Get movies
     *
     * @return string
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Movies
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }
}

