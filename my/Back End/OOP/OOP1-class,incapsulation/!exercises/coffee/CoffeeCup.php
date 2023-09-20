<?php
class CoffeeCup{
    const ALLOWED_BRANDS = ['Malongo', 'Lavazza', 'Nescafe'];
    private $brand;
    private $volume;
    public $quantity;
    public $temperature;

    public function __construct($brand, $quantity, $temperature)
    {
        $this->setBrand($brand);
        $this->setQuantity($quantity);
        $this->temperature = $temperature;
        $this->volume = $quantity;
    } 
    public function setQuantity($quantity){
    $this->quantity=$quantity;
  } 
    public function setBrand($brand)
    {
        if (!in_array($brand, self::ALLOWED_BRANDS)) {
            echo "Input one og three: Malongo, Lavazza or Nescafe<br>";
            $this->brand='';
        }else $this->brand = $brand;
    }
    //getter
    public function getCoffee()
    {
        if (empty($this->brand)) return "";
        else return "$this->brand coffee, $this->quantity cl has temperature $this->temperature degrees" ;
    }
    public function sip($onesip)
    {        
            if ($this->volume - $onesip <0) {
                $vol=$this->volume;
                $this->volume = 0;
                return "You drink $vol cl of cofee and rest 0...";
                
            }else {
                $this->volume -= $onesip;
                return "You drink $onesip cl of coffee, remain $this->volume cl of coffee.";                
                }
    }
  
  public function getVolume(){
   return  $this->volume;
  }
    public function refill(){
        $this->volume = $this->quantity;
    }
    public function reHeat($temperature) {
        $this->temperature += $temperature;
        echo "<br><h2>The cup is currently at $this->temperature degrees</h2><br>";
    }
    public function coolDown($temperature) {
        $this->temperature -= $temperature;
        //echo "<br>The cup is currently at $this->temperature degrees<br>";
    }
}
?>