<?php
class BankAccount {
	
	private $moneyBalance; 
	private $transactionHistory;
	private $accountStatus;
	private $accountNumber;
	
	
	const LockedAccount = 1;

	public function getAccountStatus() {
		return $this->accountStatus;
	}
	
	public function setAccountStatus($accountStatus) {
		$this->accountStatus = $accountStatus;
	}	
	
	public function getMoneyBalance() {
		return $this->moneyBalance;
	}
	
	public function setMoneyBalance($moneyBalance) {
		$this->moneyBalance = $moneyBalance;
	}		
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}	

	public function getAccountNumber() {
		return $this->accountNumber;
	}
	
	public function setAccountNumber($accountNumber) {
		$this->accountNumber = $accountNumber;
	}		
	
	public function create($name, $accountNumber, $depositValue=0,$accountStatus) {
	
		$this->setAccountStatus($accountStatus);
		
		$this->setMoneyBalance($depositValue);
	
		$this->setName($name);
		
		$this->setAccountNumber($accountNumber);
		
	}
	
	public function deposit( $value ){
		
		$objCalculator = new Calculator();
		$this->setMoneyBalance( $objCalculator->add( $this->getMoneyBalance(), $value) ) ; 			
	}
	
	
}
?>