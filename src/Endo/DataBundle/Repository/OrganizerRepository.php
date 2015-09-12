<?php

namespace Endo\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class OrganizerRepository
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Repository
 */
class OrganizerRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findAllQueryBuilder()
    {
        return $this->createQueryBuilder('o');
    }
}
