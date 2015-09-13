<?php

namespace Endo\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
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
            ],
            200
        );

        return $this->handleView($view);
    }

    public function postAction()
    {

    }

    /**
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
            ],
            200
        );

        return $this->handleView($view);
    }
}
