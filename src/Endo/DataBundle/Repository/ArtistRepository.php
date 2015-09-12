<?php

namespace Endo\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Class ArtistRepository
 *
 * @author  Rafał Kuć <qc.rafal@gmail.com>
 * @package Endo\DataBundle\Repository
 */
class ArtistRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findAllQueryBuilder()
    {
        return $this->createQueryBuilder('a');
    }
}
