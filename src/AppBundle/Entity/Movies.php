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
     * @var \AppBundle\Entity\Resume
     */
    private $resume;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $category;

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
     * Set resume
     *
     * @param \AppBundle\Entity\Resume $resume
     *
     * @return Movies
     */
    public function setResume(\AppBundle\Entity\Resume $resume = null)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return \AppBundle\Entity\Resume
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Movies
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
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
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getGallery()
    {
        return $this->category;
    }
}
