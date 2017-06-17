<?php

use PHPUnit\Framework\TestCase;
use watchwood\QuerySugar\QueryBuilder;
use watchwood\QuerySugar\Model;

include_once(__DIR__ . "/../vendor/autoload.php");

class DemoTest extends TestCase
{
	protected function getBuilder(){
		return new QueryBuilder (
			new Illuminate\Database\Connection(null)
		);
	}

    public function testEquality()
    {
		$builder = $this->getBuilder();
		$builder->eq("column", "value");
        $this->assertEquals('select * where "column" = ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->equals("column", "value");
        $this->assertEquals('select * where "column" = ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->neq("column", "value");
        $this->assertEquals('select * where "column" != ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->notEquals("column", "value");
        $this->assertEquals('select * where "column" != ?', $builder->toSql());
    }

    public function testGreaterness()
    {
		$builder = $this->getBuilder();
		$builder->gt("column", 0);
        $this->assertEquals('select * where "column" > ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->greaterThan("column", 0);
        $this->assertEquals('select * where "column" > ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->greater("column", 0);
        $this->assertEquals('select * where "column" > ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->gte("column", 0);
        $this->assertEquals('select * where "column" >= ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->greaterEquals("column", 0);
        $this->assertEquals('select * where "column" >= ?', $builder->toSql());
    }
    

    public function testLesserness()
    {
		$builder = $this->getBuilder();
		$builder->lt("column", 0);
        $this->assertEquals('select * where "column" < ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->lessThan("column", 0);
        $this->assertEquals('select * where "column" < ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->lesser("column", 0);
        $this->assertEquals('select * where "column" < ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->lte("column", 0);
        $this->assertEquals('select * where "column" <= ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->lesserEquals("column", 0);
        $this->assertEquals('select * where "column" <= ?', $builder->toSql());
    }
    
    
    

    public function testStrings()
    {
		$builder = $this->getBuilder();
		$builder->contains("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->like("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->starts("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->ends("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->startsWith("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
        
		$builder = $this->getBuilder();
		$builder->endsWith("column", "string");
        $this->assertEquals('select * where "column" like ?', $builder->toSql());
    }
}