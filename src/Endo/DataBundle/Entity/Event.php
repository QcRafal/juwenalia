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
     * Event title
     *
     * @var string
     */
    protected $title;

    /**
     * Event slug
     *
     * @var string
     */
    protected $slug;

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
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
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
     * @param Artist $artist
     */
    public function addArtist(Artist $artist)
    {
        $this->artists->add($artist);
    }

    /**
     * @param Artist $artist
     */
    public function removeArtist(Artist $artist)
    {
        $this->artists->removeElement($artist);
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

    /**
     * @param Organizer $organizer
     */
    public function addOrganizer(Organizer $organizer)
    {
        $this->organizers->add($organizer);
    }

    /**
     * @param Organizer $organizer
     */
    public function removeOrganizer(Organizer $organizer)
    {
        $this->organizers->removeElement($organizer);
    }

    /**
     * @return News[]
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * @param News[] $news
     */
    public function setNews($news)
    {
        $this->news = $news;
    }

    /**
     * @param News $news
     */
    public function addNews(News $news)
    {
        $this->news->add($news);
    }

    /**
     * @param News $news
     */
    public function removeNews(News $news)
    {
        $this->news->removeElement($news);
    }
}
