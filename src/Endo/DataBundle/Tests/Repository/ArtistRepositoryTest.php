<?php

namespace Endo\DataBundle\Tests\Repository;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class ArtistRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
class ArtistRepositoryTest extends AbstractRepositoryTest
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
     * Testing ArtistRepository->findAllQueryBuilder()
     */
    public function testFindAllQueryBuilder()
    {
        $queryBuilder = $this->em
            ->getRepository('EndoDataBundle:Artist')
            ->findAllQueryBuilder();


        $this->assertInstanceOf('\Doctrine\ORM\QueryBuilder', $queryBuilder);
        $this->assertEquals(['a'], $queryBuilder->getAllAliases());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

}