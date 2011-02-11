<?php
class BankAccountTest extends CTestCase {
	private $bankAccount;
	
	public function setUp(){
		$this->bankAccount = new BankAccount();
	}
	
	public function testCreateBankAccount(){
		
		$this->bankAccount->create('Bruno', '1234-0',  10000, BankAccount::LockedAccount);
		
		$this->assertEquals($this->bankAccount->getAccountStatus(),  BankAccount::LockedAccount);
		
		$this->assertEquals($this->bankAccount->getMoneyBalance(), 10000);
		
		$this->assertEquals($this->bankAccount->getName(), 'Bruno');
		
		$this->assertEquals($this->bankAccount->getAccountNumber(),  '1234-0');
		
	}
	
	public function testCreate100Deposit140Return240(){
		
		$this->bankAccount->create('Bruno', '1234-0',  100, BankAccount::LockedAccount);
		
		$this->bankAccount->deposit(140);
		
		$this->assertEquals($this->bankAccount->getMoneyBalance(), 240 );
		
	}
	
	
}
?>