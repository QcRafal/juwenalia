<?php

namespace Endo\DataBundle\Tests\Repository;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class NewsRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
class NewsRepositoryTest extends AbstractRepositoryTest
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
     * Testing NewsRepository->findAllQueryBuilder()
     */
    public function testFindAllQueryBuilder()
    {
        $queryBuilder = $this->em
            ->getRepository('EndoDataBundle:News')
            ->findAllQueryBuilder();


        $this->assertInstanceOf('\Doctrine\ORM\QueryBuilder', $queryBuilder);
        $this->assertEquals(['n'], $queryBuilder->getAllAliases());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

}