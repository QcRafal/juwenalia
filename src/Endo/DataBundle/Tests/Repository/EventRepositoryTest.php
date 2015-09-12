<?php

namespace Endo\DataBundle\Tests\Repository;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class EventRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
class EventRepositoryTest extends AbstractRepositoryTest
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
     * Testing EventRepository->findAllQueryBuilder()
     */
    public function testFindAllQueryBuilder()
    {
        $queryBuilder = $this->em
            ->getRepository('EndoDataBundle:Event')
            ->findAllQueryBuilder();


        $this->assertInstanceOf('\Doctrine\ORM\QueryBuilder', $queryBuilder);
        $this->assertEquals(['ev'], $queryBuilder->getAllAliases());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

}