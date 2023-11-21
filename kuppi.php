<?php
class BankAccount{
    public $accNumber;
    public $accBalance;

    public function withdraw($ammount){
        $this->accBalance -=$ammount;
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
$account->accBalance=50000;

$account->diposit(10000);
$account->withdraw(25000);

echo "Account Number:" . $account->accNumber . "<br>Account Balance:" .$account->checkBalance();
?>