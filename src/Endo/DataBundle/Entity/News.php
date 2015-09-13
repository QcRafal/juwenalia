<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class News
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Entity
 */
class News
{
    /**
     * News id
     *
     * @var integer
     */
    protected $id;

    /**
     * News title
     *
     * @var string
     */
    protected $title;

    /**
     * News slug
     *
     * @var string
     */
    protected $slug;

    /**
     * News lead
     *
     * @var string
     */
    protected $lead;

    /**
     * News content
     *
     * @var string
     */
    protected $content;

    /**
     * Collection of events
     *
     * @var Event[]
     */
    protected $events;

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
     * News constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->artists = new ArrayCollection();
        $this->organizers = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return string
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @param string $lead
     */
    public function setLead($lead)
    {
        $this->lead = $lead;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event[] $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @param Event $event
     */
    public function addEvent(Event $event)
    {
        $this->events->add($event);
    }

    /**
     * @param Event $event
     */
    public function removeEvent(Event $event)
    {
        $this->events->removeElement($event);
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
}
