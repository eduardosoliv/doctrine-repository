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

use ESO\Doctrine\ORM\QueryBuilder;

/**
 * ModelAQueryBuilder
 */
class ModelAQueryBuilder extends QueryBuilder
{
    /**
     * @param int $id
     *
     * @return ModelAQueryBuilder
     */
    public function andWhereId($id)
    {
        return $this->andWhere($this->alias() . '.id = :id')
                    ->setParameter('id', $id);
    }
}
