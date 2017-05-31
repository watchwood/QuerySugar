<?php

namespace watchwood\QuerySugar;


trait SweetQueries
{
	/**
     * Return a query checking for equality
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function eq($column, $value)
    {
        return $this->where($column, $value);
    }
	
	/**
     * Return a query checking for equality
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function equals($column, $value)
    {
        return $this->eq($column, $value);
    }
	
	/**
     * Return a query checking for inequality
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function neq($column, $value)
    {
        return $this->where($column, "!=", $value);
    }
	
	/**
     * Return a query checking for inequality
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function notEquals($column, $value)
    {
        return $this->neq($column, $value);
    }
	
	
	/**
     * Return a query checking for a greater than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function gt($column, $value)
    {
        return $this->where($column, ">", $value);
    }
	
	/**
     * Return a query checking for a greater than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function greaterThan($column, $value)
    {
        return $this->gt($column, $value);
    }
	
	/**
     * Return a query checking for a greater than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function greater($column, $value)
    {
        return $this->gt($column, $value);
    }
	
	/**
     * Return a query checking for a greater/equals than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function gte($column, $value)
    {
        return $this->where($column, ">=", $value);
    }
	
	/**
     * Return a query checking for a greater/equals than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function greaterEquals($column, $value)
    {
        return $this->gte($column, $value);
    }
	
	/**
     * Return a query checking for a lesser than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function lt($column, $value)
    {
        return $this->where($column, "<", $value);
    }
	
	/**
     * Return a query checking for a lesser than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function lesser($column, $value)
    {
        return $this->lt($column, $value);
    }
	
	/**
     * Return a query checking for a lesser than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function lessThan($column, $value)
    {
        return $this->lt($column, $value);
    }
	
	
	/**
     * Return a query checking for a lesser/equals than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function lte($column, $value)
    {
        return $this->where($column, "<=", $value);
    }
	
	
	/**
     * Return a query checking for a lesser/equals than a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function lesserEquals($column, $value)
    {
        return $this->lte($column, $value);
    }
	
	/**
     * Return a query checking for a column containing a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function contains($column, $value)
    {
        return $this->where($column, "like", '%'.$value.'%');
    }
	
	/**
     * Return a query checking for a column containing a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function like($column, $value)
    {
        return $this->where($column, "like", '%'.$value.'%');
    }
	
	/**
     * Return a query checking for a column starting with a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function starts($column, $value)
    {
        return $this->where($column, "like", $value.'%');
    }
	
	/**
     * Return a query checking for a column ending with a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function ends($column, $value)
    {
        return $this->where($column, "like", '%'.$value);
    }
	
	/**
     * Return a query checking for a column starting with a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function startsWith($column, $value)
    {
        return $this->starts($column, $value);
    }
	
	/**
     * Return a query checking for a column ending with a value
     *
     * @param  string $column
     * @param  mixed  $value
     * @return $this
     */
    public function endsWith($column, $value)
    {
        return $this->ends($column, $value);
    }
}
