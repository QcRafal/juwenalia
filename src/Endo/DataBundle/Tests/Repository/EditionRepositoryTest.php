<?php

namespace Endo\DataBundle\Tests\Repository;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class EditionRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
class EditionRepositoryTest extends AbstractRepositoryTest
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
     * Testing EditionRepository->findAllQueryBuilder()
     */
    public function testFindAllQueryBuilder()
    {
        $queryBuilder = $this->em
            ->getRepository('EndoDataBundle:Edition')
            ->findAllQueryBuilder();


        $this->assertInstanceOf('\Doctrine\ORM\QueryBuilder', $queryBuilder);
        $this->assertEquals(['e'], $queryBuilder->getAllAliases());
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

}