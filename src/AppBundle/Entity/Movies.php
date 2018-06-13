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
     * @var string
     */
    private $nationality;

    /**
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $iframe;


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

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Movies
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return Movies
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set iframe
     *
     * @param string $iframe
     *
     * @return Movies
     */
    public function setIframe($iframe)
    {
        $this->iframe = $iframe;

        return $this;
    }

    /**
     * Get iframe
     *
     * @return string
     */
    public function getIframe()
    {
        return $this->iframe;
    }
}
