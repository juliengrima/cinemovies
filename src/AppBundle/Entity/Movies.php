<?php

namespace AppBundle\Entity;

/**
 * Movies
 */
class Movies
{

    /**
     * @var integer
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
     * @var boolean
     */
    private $slider;

    /**
     * @var \AppBundle\Entity\Media
     */
    private $media;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $gallery;


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

    /**
     * Set slider
     *
     * @param boolean $slider
     *
     * @return Movies
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;

        return $this;
    }

    /**
     * Get slider
     *
     * @return boolean
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * Set media
     *
     * @param \AppBundle\Entity\Media $media
     *
     * @return Movies
     */
    public function setMedia(\AppBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \AppBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set gallery
     *
     * @param \AppBundle\Entity\Category $gallery
     *
     * @return Movies
     */
    public function setGallery(\AppBundle\Entity\Category $gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return \AppBundle\Entity\Category
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    /**
     * @var \DateTime
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $actors;

    /**
     * @var \DateTime
     */
    private $resume;


    /**
     * Set author
     *
     * @param \DateTime $author
     *
     * @return Movies
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \DateTime
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set actors
     *
     * @param \DateTime $actors
     *
     * @return Movies
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return \DateTime
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set resume
     *
     * @param \DateTime $resume
     *
     * @return Movies
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return \DateTime
     */
    public function getResume()
    {
        return $this->resume;
    }
}
