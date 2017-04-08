<?php

namespace watchwood\QuerySugar;

use Illuminate\Database\Eloquent\Builder;

class EloquentBuilder extends Builder
{
	use SweetQueries;
}