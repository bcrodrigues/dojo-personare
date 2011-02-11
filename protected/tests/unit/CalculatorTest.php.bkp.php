<?php

class CalculatorTest extends CTestCase
{

	public function testSum1And1Return2()
	{
		$calculator = new Calculator();

		$this->assertEquals($calculator->sum(1,1), 2);

	}
	
	public function testSum2And3Return5()
	{
		$calculator = new Calculator();

		$this->assertEquals($calculator->sum(2,3), 5);

	}	
	
	public function testSumStringAndNumberReturnFalse()
	{
		$calculator = new Calculator();

		$this->assertEquals($calculator->sum('Teste',3), false);

	}	
	
	public function testSumNumberAndStringReturnFalse()
	{
		$calculator = new Calculator();

		$this->assertEquals($calculator->sum(4,'Teste'),false);

	}		
	
}

?>