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
     * Event isPublic flag
     *
     * @var boolean
     */
    protected $isPublic;

    /**
     * Event publicationDate
     *
     * @var \Datetime
     */
    protected $publicationDate;

    /**
     * Event dateTimeStart
     *
     * @var \Datetime
     */
    protected $dateTimeStart;

    /**
     * Event dateTimeEnd
     *
     * @var \Datetime
     */
    protected $dateTimeEnd;

    /**
     * Event description
     *
     * @var string
     */
    protected $description;

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
     * @return boolean
     */
    public function isIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;
    }

    /**
     * @return \Datetime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param \Datetime $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return \Datetime
     */
    public function getDateTimeStart()
    {
        return $this->dateTimeStart;
    }

    /**
     * @param \Datetime $dateTimeStart
     */
    public function setDateTimeStart($dateTimeStart)
    {
        $this->dateTimeStart = $dateTimeStart;
    }

    /**
     * @return \Datetime
     */
    public function getDateTimeEnd()
    {
        return $this->dateTimeEnd;
    }

    /**
     * @param \Datetime $dateTimeEnd
     */
    public function setDateTimeEnd($dateTimeEnd)
    {
        $this->dateTimeEnd = $dateTimeEnd;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
