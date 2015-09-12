<?php

namespace Endo\DataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * Class Event
 *
 * @author  Rafał Kuć <rafal.kuc@laboratorium.ee>
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
     * Event constructor.
     */
    public function __construct()
    {
        $this->artists = new ArrayCollection();
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
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


}
