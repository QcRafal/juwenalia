<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class OrganizerApiController
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\ApiBundle\Controller
 *
 *
 * @RouteResource("Organizer")
 */
class OrganizerApiController extends AbstractApiController
{
    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      resource=true,
     *      section="Organizers",
     *      description="This is a description of your API method",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cgetAction()
    {
        $em = $this->getManager();
        $organizers = $em->getRepository('EndoDataBundle:Organizer')
            ->findAll();

        $view = View::create(
            [
                'organizers' => $organizers,
                '_links'  => [
                    'self' => ['href' => $this->get('router')->generate('get_organizers')],
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
     *      section="Organizers",
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
     *      section="Organizers",
     *      output={
     *          "class" = "Endo\DataBundle\Entity\Organizer",
     *          "groups" = {"api"}
     *      },
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($slug)
    {
        $em = $this->getManager();
        $organizer = $em
            ->getRepository('EndoDataBundle:Organizer')
            ->findOneBy(['slug' => $slug]);

        if (!$organizer) {
            throw $this->createNotFoundException();
        }

        $view = View::create(
            [
                'organizer' => $organizer,
                '_links' => [
                    'self' => ['href' => $this->get('router')->generate('get_organizer', ['slug' => $slug])],
                ],
            ],
            200
        );

        $view->setSerializationContext($this->getSerializationContext());

        return $this->handleView($view);
    }
}
