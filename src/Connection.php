<?php

namespace watchwood\QuerySugar;

use Illuminate\Database\Connection as BaseConnection;

class Connection extends BaseConnection
{

	/**
     * Get a new query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function query()
    {
        return new QueryBuilder(
            $this, $this->getQueryGrammar(), $this->getPostProcessor()
        );
    }
}