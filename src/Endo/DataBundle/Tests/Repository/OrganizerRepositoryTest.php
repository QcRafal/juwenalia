<?php

namespace Endo\DataBundle\Tests\Repository;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class OrganizerRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
class OrganizerRepositoryTest extends AbstractRepositoryTest
{
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * {@inheritdoc}
     */
    protected function setUpTest()
    {
        $this->em = $this->container->get('doctrine')->getManager();
    }

    /**
     * Testing OrganizerRepository->findAllQueryBuilder()
     */
    public function testFindAllQueryBuilder()
    {
        $queryBuilder = $this->em
            ->getRepository('EndoDataBundle:Organizer')
            ->findAllQueryBuilder();


        $this->assertInstanceOf('\Doctrine\ORM\QueryBuilder', $queryBuilder);
        $this->assertEquals(['o'], $queryBuilder->getAllAliases());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

}