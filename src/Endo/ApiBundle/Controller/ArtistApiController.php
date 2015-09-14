<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ArtistController
 * @package Endo\ApiBundle\Controller
 *
 * @RouteResource("Artist")
 */
class ArtistApiController extends AbstractApiController
{
    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      resource=true,
     *      section="Artists",
     *      description="This is a description of your API method",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cgetAction()
    {
        $em = $this->getManager();
        $artists = $em->getRepository('EndoDataBundle:Artist')
            ->findAll();

        $view = View::create(
            [
                'artists' => $artists,
                '_links'  => [
                    'self' => ['href' => $this->get('router')->generate('get_artists')],
                ],
            ],
            200
        );

        $view->setSerializationContext($this->getSerializationContext());

        return $this->handleView($view);
    }

    /**
     * @ApiDoc(
     *      description="This is a description of your API method",
     *      section="Artists",
     *      tags={"alpha", "in-development" = "red"}
     * )
     */
    public function postAction()
    {

    }

    /**
     * @param $slug
     *
     * @ApiDoc(
     *      description="This is a description of your API method",
     *      section="Artists",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($slug)
    {
        $em = $this->getManager();
        $artist = $em
            ->getRepository('EndoDataBundle:Artist')
            ->findOneBy(['slug' => $slug]);

        if (!$artist) {
            throw $this->createNotFoundException();
        }

        $view = View::create(
            [
                'artist' => $artist,
                '_links' => [
                    'self' => ['href' => $this->get('router')->generate('get_artist', ['slug' => $slug])],
                ],
            ],
            200
        );

        $view->setSerializationContext($this->getSerializationContext());

        return $this->handleView($view);
    }
}
