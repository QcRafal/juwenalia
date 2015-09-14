<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class EventApiController
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\ApiBundle\Controller
 *
 *
 * @RouteResource("Event")
 */
class EventApiController extends AbstractApiController
{
    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      resource=true,
     *      section="Events",
     *      description="This is a description of your API method",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cgetAction()
    {
        $em = $this->getManager();
        $events = $em->getRepository('EndoDataBundle:Event')
            ->findAll();

        $view = View::create(
            [
                'events' => $events,
                '_links'  => [
                    'self' => ['href' => $this->get('router')->generate('get_events')],
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
     *      section="Events",
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
     *      section="Events",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($slug)
    {
        $em = $this->getManager();
        $event = $em
            ->getRepository('EndoDataBundle:Event')
            ->findOneBy(['slug' => $slug]);

        if (!$event) {
            throw $this->createNotFoundException();
        }

        $view = View::create(
            [
                'event' => $event,
                '_links' => [
                    'self' => ['href' => $this->get('router')->generate('get_event', ['slug' => $slug])],
                ],
            ],
            200
        );

        $view->setSerializationContext($this->getSerializationContext());

        return $this->handleView($view);
    }
}
