<?php

namespace Endo\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Class EventRepository
 *
 * @author  Rafał Kuć <rafal.kuc@laboratorium.ee>
 * @package Endo\DataBundle\Repository
 */
class EventRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findAllQueryBuilder()
    {
        return $this->createQueryBuilder('e');
    }
}
