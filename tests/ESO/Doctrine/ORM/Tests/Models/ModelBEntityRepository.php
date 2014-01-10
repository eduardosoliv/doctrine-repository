<?php

/*
 * This file is a part of the Doctrine Repository library.
 *
 * (c) 2013 Eduardo Oliveira <entering@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ESO\Doctrine\ORM\Tests\Models;

use ESO\Doctrine\ORM\EntityRepository;
use ESO\Doctrine\ORM\QueryBuilder;

/**
 * ModelBEntityRepository
 */
class ModelBEntityRepository extends EntityRepository
{
    /**
     * @param int $id
     *
     * @return QueryBuilder
     */
    public function getByIdQB($id)
    {
        return $this->createQueryBuilder()
                    ->where($this->alias() . '.id = :id')
                    ->setParameter('id', $id);
    }
}
