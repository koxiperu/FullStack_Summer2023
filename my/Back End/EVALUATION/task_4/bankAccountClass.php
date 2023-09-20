<?php
//Sorry, that all files in one... tryed to separate, but something went wrong... 

//Anstarct class BankAcount
abstract class BankAccount {
    public $acNumber;
    public $amount;

    public function __construct($acNumber, $amount) {
    }
    abstract function getData();        
    abstract function setData($acNumber, $amount);
    abstract function withdraw($cost);
    abstract function deposit($cost);

};
//class SavingAccount
class SavingAccount extends BankAccount{
    private $interest;
    public $acNumber;
    public $amount;

    public function __construct($acNumber, $amount, $interest){
        $this->interest=$interest;
        $this->acNumber=$acNumber;
        $this->amount=$amount;

    }

    public function getData(){
            $res['acNumber']= $this->acNumber;
            $res['amount']=$this->amount;
            $res['interest']=$this->interest;
            return $res;
        }
        
    public function setData($acNumber, $amount){
        $this->acNumber=$acNumber;
        $this->amount=$amount;
    }
    private function getInterest(){
        return $this->interest;
    }

    public function setInterest($newRate){
        $this->interest=$newRate;
    }

    public function withdraw($cost){
        $clientData=$this->getData();
        if ($clientData['amount']<$cost) echo  '<h1>Transaction cancelled.</h1>';
        else {
            $clientData['amount']-=$cost;
            $this-> setData($clientData['acNumber'], $clientData['amount'],$clientData['interest']);
        }
    }

    public function deposit($cost){
        $clientData=$this->getData();
        $clientData['amount']+=$cost;
        $this-> setData($clientData['acNumber'], $clientData['amount'],$clientData['interest']);
    }
    
    
    public function premium(){
        $incr=$this->getInterest();
        $clientData=$this->getData();
        $clientData['amount']+=$incr*$clientData['amount']/100;
        $this->setData($clientData['acNumber'], $clientData['amount'],$clientData['interest']);
    }

};

//class ProfessionalAccount
class ProfessionalAccount extends BankAccount{
    public $acNumber;
    public $amount;    

    public function getData(){
            $res['acNumber']= $this->acNumber;
            $res['amount']=$this->amount;
            return $res;
        }
        
    public function setData($acNumber, $amount){
        $this->acNumber=$acNumber;
        $this->amount=$amount;
    }

    public function withdraw($cost){
        $clientData=$this->getData();
        $clientData['amount']-=$cost;
        $this-> setData($clientData['acNumber'], $clientData['amount']);
        }

    public function deposit($cost){
        $clientData=$this->getData();
        $clientData['amount']+=$cost;
        $this-> setData($clientData['acNumber'], $clientData['amount']);
    }

};

//ARRAY
$accountsArray=[
    new SavingAccount('12345678', 809, 5),
    new SavingAccount('87654321', 138065, 1.01),
    new ProfessionalAccount('123',1000,0),
    new ProfessionalAccount('321', 0),
];


//button checks the account and count the amount
if (isset($_POST['sbtn'])){
    $myAccount=$_POST['account'];
    $in=false;
    foreach ($accountsArray as $account) {
    $client=$account->getData();
    if ($client['acNumber']==$myAccount) {
        echo 'You are in our bank!';
        $in=true;
        $accData=$account;
    }
    };
    if ($in) {
        if (!empty($_POST['credit'])) {
            $accData->withdraw($_POST['credit']);
            $balance= $accData->getData();
            echo "<h3>Your balance now " .$balance['amount']. '</h3><hr>';
        };
        if (!empty($_POST['debit'])) {
            $accData->deposit($_POST['debit']);
            $balance= $accData->getData();
            echo "<h3>Your balance now " .$balance['amount']. '</h3><hr>';
        };
    } else echo "<h1>You entered incorrect account number. Check it.</h1><hr>";
    
};

//if saving account - then when pushing that button interest rate adds.
if (isset($_POST['addInt'])){
    $myAccount=$_POST['account'];
    $in=false;
    foreach ($accountsArray as $account) {
    $name=$account->getData();
    if ($name['acNumber']==$myAccount) {
        echo 'You are in our bank!';
        $in=true;
        $accData=$account;
    }
    };
    if ($in) {
        $accData->premium();
        $balance= $accData->getData();
        echo "<h3>Your balance now " .$balance['amount']. '</h3><hr>';
        }
    else echo "<h1>You entered incorrect account number. Check it.</h1><hr>";
    
}






?>
<form action="" method='POST'>
    <label for="account">Input account number: </label>
    <input type="text" name="account" id="">
    <hr>
    <p>Choose 1 option: to widthraw or deposit. Fill the corresponding field.</p>
    <label for="credit">How much do you want to withdraw? </label>
    <input type="number" name="credit" id="">
    <hr>
    <p>OR</p>
    <hr>
    <label for="debit">How much do you want to deposit? </label>
    <input type="number" name="debit" id="">
    <hr>
    <input type="submit" name="sbtn" value="check">
    <input type="submit" name="addInt" value="add interest (if you have saving account)">
</form>