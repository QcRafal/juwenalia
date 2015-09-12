<?php

namespace Endo\DataBundle\Tests\Repository;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class AbstractRepositoryTest
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Tests\Repository
 */
abstract class AbstractRepositoryTest extends WebTestCase
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        self::bootKernel();
        $this->container = static::$kernel->getContainer();

        $this->setUpTest();
    }

    /**
     *
     * @return void
     */
    abstract protected function setUpTest();
}