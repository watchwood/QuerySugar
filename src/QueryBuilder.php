<?php

namespace watchwood\QuerySugar;

use Illuminate\Database\Query\Builder;

class QueryBuilder extends Builder
{
	use SweetQueries;
}