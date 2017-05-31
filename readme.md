# Query Sugar

Adding some Syntactic Sugar to Eloquent's query builder.

## Installation

Run `composer require watchwood/QuerySugar` to include the package in your Laravel app.

Have your models extend from `watchwood/QuerySugar/Model`

For convenience, you can have your User model extend from the included `watchwood/QuerySugar/UserModel`

## New Query Builder Commands

### Equality

* eq($column, $value)
* equals($column, $value)
* neq($column, $value)
* notEquals($column, $value)

### Relativity

* gt($column, $value)
* gte($column, $value)
* greater($column, $value)
* greaterThan($column, $value)
* greaterEquals($column, $value)

* lt($column, $value)
* lte($column, $value)
* lesser($column, $value)
* lessThan($column, $value)
* lesserEquals($column, $value)


### Strings

* contains($column, $value)
* like($column, $value)
* starts($column, $value)
* startsWith($column, $value)
* ends($column, $value)
* endsWith($column, $value)

## Contributing

If you have anything you'd like to see added to this package, feel free to reach 
out to me on Github or make a Pull Request with the extra functionality.
