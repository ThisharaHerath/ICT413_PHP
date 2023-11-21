<?php
class BankAccount{
    public $accNumber;
    public $accBalance;

    public function withdraw($ammount){
        if($ammount<100){
            echo "Invalid Amount, Withdraw amount need to be more than 100 <br>"
        }
    if 
            
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