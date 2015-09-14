<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EditionController
 * @package Endo\ApiBundle\Controller
 *
 * @RouteResource("Edition")
 */
class EditionApiController extends AbstractApiController
{
    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      resource=true,
     *      section="Editions",
     *      description="This is a description of your API method",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cgetAction()
    {
        $em = $this->getManager();
        $editions = $em->getRepository('EndoDataBundle:Edition')
            ->findAll();

        $view = View::create(
            [
                'editions' => $editions,
                '_links'  => [
                    'self' => ['href' => $this->get('router')->generate('get_editions')],
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
     *      section="Editions",
     *      tags={"alpha", "in-development" = "red"}
     * )
     */
    public function postAction()
    {

    }

    /**
     * @ApiDoc(
     *      description="This is a description of your API method",
     *      section="Editions",
     *      tags={"alpha", "in-development" = "red"}
     * )
     *
     * @param $slug
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($slug)
    {
        $em = $this->getManager();
        $edition = $em
            ->getRepository('EndoDataBundle:Edition')
            ->findOneBy(['slug' => $slug]);

        if (!$edition) {
            throw $this->createNotFoundException();
        }

        $view = View::create(
            [
                'edition' => $edition,
                '_links' => [
                    'self' => [ 'href' => $this->get('router')->generate('get_edition', ['slug' => $slug])],
                ]
            ],
            200
        );

        $view->setSerializationContext($this->getSerializationContext());

        return $this->handleView($view);
    }
}
