<?php
/*
    We're going to make the code for a simple online store with different types of products

    part 1 :
        Create an interface called Discountable. This interface should have a method calculateDiscount() that calculates the discount amount for a product.

    part 2 :
        Create an abstract class called Product. It should have the following abstract methods:
            getPrice() to get the price of the product.
            getDescription() to get the description of the product.
    part 3 :
        Create two classes that extend the Product abstract class:
            a. RegularProduct: This class should represent a regular product with a regular price.
            b. PremiumProduct: This class should represent a premium product with a higher price than the regular price.

    part 4 :
        Implement the abstract methods in each of the Product subclasses to return the appropriate price and description for each product.

    part 5 :
        Implement the Discountable interface in the PremiumProduct class and calculate a fixed discount of 10% on premium products.
        
    part 6 :
        Create instances of RegularProduct and PremiumProduct and demonstrate getting their prices, descriptions, and applying discounts if applicable.
*/
interface IDiscountable {
    public function calculateDiscount();

}
abstract class Product
{
    public $name;
    public $weight;
    public $price;
    public function __construct($name, $weight, $price)
    {
        $this->name=$name;
        $this->weight=$weight;
        $this->price=$price;
    }
    abstract function getPrice();
    abstract function getDescription();
}

class RegularProduct extends Product
{
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        $n=$this->name;
        $w=$this->weight;
        return "$n in the amount of $w gramms";
    }
}
class PremiumProduct extends Product implements IDiscountable
{
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        $n=$this->name;
        $w=$this->weight;
        return "$n in the amount of $w gramms";
    }
    public function calculateDiscount()
    {
        $newPrice=$this->price*0.9;
        return $newPrice;
    }
}
$myPremium = new PremiumProduct('Bread', 500, 19050);
$myRegular = new RegularProduct('Car', 1500000, 2000);
echo $myRegular->getDescription() ." costs ". $myRegular->getPrice(). '$.';
echo "<br>...................<br>";
$discount=$myPremium->calculateDiscount();
echo $myPremium->getDescription() ." first costs ". $myPremium->getPrice(). '$, but after discount it costs ' .$discount. '$. <br>';
?>