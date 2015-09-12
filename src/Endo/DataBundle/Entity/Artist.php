<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Artist
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Entity
 */
class Artist
{
    /**
     * Artist Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Artist name
     *
     * @var string
     */
    protected $title;

    /**
     * Artist description
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
     * Artist constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
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
     * Set description
     *
     * @param string $description
     *
     * @return Artist
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return ArrayCollection|Event[]
     */
    public function getEvents()
    {
        return $this->events;
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
}
