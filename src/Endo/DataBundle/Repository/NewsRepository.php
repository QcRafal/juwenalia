<?php

namespace Endo\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class NewsRepository
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Repository
 */
class NewsRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findAllQueryBuilder()
    {
        return $this->createQueryBuilder('n');
    }
}
