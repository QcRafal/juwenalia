<?php

namespace Endo\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class EditionRepository
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Repository
 */
class EditionRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findAllQueryBuilder()
    {
        return $this->createQueryBuilder('e');
    }
}
