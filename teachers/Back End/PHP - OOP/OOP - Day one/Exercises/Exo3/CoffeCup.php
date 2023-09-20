<?php
class CoffeeCup {

    const ALLOWED_BRANDS = ['Malongo','Lavazza', 'Nescaffee'];
    private $brand;
    private $volume;
    public $quantity;
    public $temperature;

    public function __construct($brand, $temperature, $volume)
    {
        $this->setBrand($brand);
        $this->quantity = $volume;
        $this->temperature = $temperature;
        $this->setVolume($volume);
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    public function setBrand($brand)
    {
        if(in_array($brand, self::ALLOWED_BRANDS)){
            $this->brand = $brand;
        }else{
            echo "Wrong brand!";
        }
    }

    public function getBrand()
    {
        return $this->brand;
    }

    //GetTemp, setTemp, getquantity,...

    public function getQuantity(){
        return $this->quantity;
    }

    public function sip(int $quantity){
        $quantitySiped = $quantity;
        if(is_integer($quantity)){
            If($this->quantity - $quantity > 0){
                $this->quantity -= $quantity;
            }else{
                $quantitySiped = $quantity - $this->quantity;
                $this->quantity = 0;
            }
        }else{
            echo "Quantity is not an Integer!";
        }
        echo "You sip $quantitySiped left $this->quantity to sip </br>";
    }

    public function refill(){
        $this->quantity = $this->volume;
    }
    
    public function reheat($temperature){
        $this->temperature += $temperature;
        echo "The cup is curently at $this->temperature degrees </br>";
    }

    public function coolDown($temperature){
        $this->temperature -= $temperature;
        echo "The cup is curently at $this->temperature degrees </br>";
    }


}