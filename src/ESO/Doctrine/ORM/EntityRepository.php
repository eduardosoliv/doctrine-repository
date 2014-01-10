<?php

/*
 * This file is a part of the Doctrine Repository library.
 *
 * (c) 2013 Eduardo Oliveira <entering@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ESO\Doctrine\ORM;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

/**
 * EntityRepository
 */
class EntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $entityName;

    /**
     * @var string
     */
    protected $alias = 't';

    /**
     * @param EntityManagerInterface $entityManager
     * @param string                 $entityName
     * @param string                 $alias
     */
    public function __construct(EntityManagerInterface $entityManager, $entityName, $alias = 't')
    {
        $this->entityManager = $entityManager;
        $this->entityName = $entityName;
        $this->alias = $alias;
    }

    /**
     * @return EntityManagerInterface
     */
    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @return string
     */
    protected function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @return string
     */
    protected function alias()
    {
        return $this->alias;
    }

    /**
     * Creates a new QueryBuilder instance that is pre-populated for this entity name.
     *
     * @return QueryBuilder
     */
    protected function createQueryBuilder()
    {
        return $this->getQueryBuilder($this->getEntityManager(), $this->alias())
                    ->from($this->getEntityName(), $this->alias());
    }

    /**
     * Override me if you want a custom query builder.
     *
     * @param EntityManager $entityManager
     * @param string        $alias
     *
     * @return QueryBuilder
     */
    protected function getQueryBuilder(EntityManager $entityManager, $alias)
    {
        return new QueryBuilder($entityManager, $alias);
    }
}
