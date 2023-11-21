<?php
class BankAccount{
    public $accNumber;
    public $accBalance;

    public function withdraw($ammount){
        if($this->accBalance > 500){
            return $this->accBalance -= $ammount;
        }
            echo "Low Balance, Account Balance is: " .$this->accBalance;
            
    }
    public function diposit($ammount){
        $this->accBalance +=$ammount;
    } 
    public function checkBalance(){
        return $this->accBalance;
    } 
}
$account=new BankAccount();
$account->accNumber=1001;
$account->accBalance=200;

$account->diposit(200);
$account->withdraw(20000);

//echo "Account Number:" . $account->accNumber . "<br>Account Balance:" .$account->checkBalance();
?>