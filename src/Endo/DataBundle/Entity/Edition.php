<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Edition
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Entity
 */
class Edition
{
    /**
     * Edition id
     *
     * @var int
     */
    protected $id;

    /**
     * Edition title
     *
     * @var string
     */
    protected $title;

    /**
     * Collection of events
     *
     * @var Event[]
     */
    protected $events;

    /**
     * Edition constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
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

}
