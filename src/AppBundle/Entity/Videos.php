<?php

namespace AppBundle\Entity;

/**
 * Videos
 */
class Videos
{
    // Variable temporaire pour upload de fichier
    private $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($video)
    {
        $this->file = $video;
        return $this;
    }

    function __toString()
    {
        return $this->getVideoName() . " | " . $this->getVideoPath();
    }

//    GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     *
     */
    private $videoName;

    /**
     * @var string
     */
    private $videoPath;


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
     * Set videoName
     *
     * @param string $videoName
     *
     * @return Videos
     */
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    /**
     * Get videoName
     *
     * @return string
     */
    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * Set videoPath
     *
     * @param string $videoPath
     *
     * @return Videos
     */
    public function setVideoPath($videoPath)
    {
        $this->videoPath = $videoPath;

        return $this;
    }

    /**
     * Get videoPath
     *
     * @return string
     */
    public function getVideoPath()
    {
        return $this->videoPath;
    }
}
