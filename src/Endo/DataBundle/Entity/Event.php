<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Event
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Entity
 */
class Event
{
    /**
     * Event Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Event edition
     *
     * @var Edition
     */
    protected $edition;


    /**
     * Event Title
     *
     * @var string
     */
    protected $title;


    /**
     * Collection of artists
     *
     * @var Artist[]
     */
    protected $artists;

    /**
     * Collection of organizers
     *
     * @var Organizer[]
     */
    protected $organizers;

    /**
     * Collection of news
     *
     * @var News[]
     */
    protected $news;

    /**
     * Event constructor.
     */
    public function __construct()
    {
        $this->artists = new ArrayCollection();
        $this->organizers = new ArrayCollection();
        $this->news = new ArrayCollection();
    }

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
     * @return Edition
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param Edition $edition
     */
    public function setEdition(Edition $edition)
    {
        $this->edition = $edition;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Artist[]
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param Artist[] $artists
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
    }

    /**
     * @return Organizer[]
     */
    public function getOrganizers()
    {
        return $this->organizers;
    }

    /**
     * @param Organizer[] $organizers
     */
    public function setOrganizers($organizers)
    {
        $this->organizers = $organizers;
    }

}

