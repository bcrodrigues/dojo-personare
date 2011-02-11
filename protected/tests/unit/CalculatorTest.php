<?php

class CalculatorTest extends CTestCase
{
	private $calculator;
	
	public function setUp()
	{
		$this->calculator = new Calculator();
	}
	
	public function testSum1And1Result2()
	{		
		$this->assertEquals($this->calculator->add(1,1), 2);
	}
	
	public function testSum2And1NotResult2()
	{
		$this->assertNotEquals( $this->calculator->add(2,1), 2 );
	}
	
	public function testSumFirstParamIsString()
	{
		$this->setExpectedException('Exception');
		
		 $this->calculator->add("a",2);
	}
	
	public function testSumSecondParamIsString()
	{
		try {
			$this->calculator->add(2,"a");
		} catch (Exception $e) {
			return;
		}
		
		$this->fail('Houve erro na soma com um parâmetro sendo string');
	}
	
	public function testSumFloatNumber()
	{
		$this->assertEquals( $this->calculator->add(2.5, 3.9), 6.4 );
	}
	
	public function testSumNegativeNumber()
	{
		$this->assertEquals ($this->calculator->add(-2, 3),1);
	}
	
	public function testSubtract2And1(){
		$this->assertEquals ( $this->calculator->subtract(2,1),1);
	}
	
	public function testSubtract3And1(){
		$this->assertNotEquals ( $this->calculator->subtract(3,1),1);
	}
	
	public function testSubtractFirstParamIsString() {
		$this->setExpectedException('Exception');
		$this->calculator->subtract('a', 2);	
	}
	
	public function testSubtractSecondParamsIsString(){
		$this->setExpectedException('IntegerException');
		$this->calculator->subtract(2,'b');
	}
	
}

?>