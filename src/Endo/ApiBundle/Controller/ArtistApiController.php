<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;

/**
 * Class ArtistController
 * @package Endo\ApiBundle\Controller
 *
 * @RouteResource("Artist")
 */
class ArtistApiController extends AbstractApiController
{
    public function cgetAction()
    {
        $artists = [];

        $view = View::create([
            'artists' => $artists
        ], 200);

        return $this->handleView($view);
    }

    public function postAction(){}

    public function getAction($slug)
    {
        $artist = [
            'slug' => $slug
        ];

        $view = View::create([
            'artist' => $artist
        ], 200);

        return $this->handleView($view);
    }
}