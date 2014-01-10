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

use Doctrine\ORM\QueryBuilder as DoctrineQueryBuilder;
use Doctrine\ORM\EntityManager;

/**
 * QueryBuilder
 */
class QueryBuilder extends DoctrineQueryBuilder
{
    /**
     * @var string
     */
    protected $alias = 't';

    /**
     * @param EntityManager $entityManager
     * @param string        $alias
     */
    public function __construct(EntityManager $entityManager, $alias = 't')
    {
        parent::__construct($entityManager);

        $this->alias = $alias;
    }

    /**
     * @return string
     */
    protected function alias()
    {
        return $this->alias;
    }
}
