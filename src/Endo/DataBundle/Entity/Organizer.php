<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Organizer
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Entity
 */
class Organizer
{
    /**
     * Organizer Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Organizer title
     *
     * @var string
     */
    protected $title;

    /**
     * Organizer description
     *
     * @var string
     */
    protected $description;

    /**
     * Collection of events
     *
     * @var Event[]
     */
    protected $events;

    /**
     * Collection of news
     *
     * @var News[]
     */
    protected $news;

    /**
     * Organizer constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->news = new ArrayCollection();
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

}
