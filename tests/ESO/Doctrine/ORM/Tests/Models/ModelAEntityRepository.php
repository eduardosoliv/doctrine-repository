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
use Doctrine\ORM\EntityManager;
use ESO\Doctrine\ORM\QueryBuilder;

/**
 * ModelAEntityRepository
 *
 * @method \ESO\Doctrine\ORM\Tests\Models\ModelAQueryBuilder createQueryBuilder()
 */
class ModelAEntityRepository extends EntityRepository implements ModelEntityRepositoryInterface
{
    /**
     * @param EntityManager $entityManager
     * @param string        $alias
     *
     * @return QueryBuilder
     */
    protected function getQueryBuilder(EntityManager $entityManager, $alias)
    {
        return new ModelAQueryBuilder($entityManager, $alias);
    }

    /**
     * @param int $id
     *
     * @return QueryBuilder
     */
    public function getByIdQB($id)
    {
        return $this->createQueryBuilder()
                    ->andWhereId($id);
    }
}
