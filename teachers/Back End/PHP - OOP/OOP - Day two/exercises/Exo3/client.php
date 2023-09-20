<?

require_once "./Exo3.php";


$cat = new Cat(4,"brown","male","Donovan");
$dog = new Dug(4,"gold",'male','doggo');
$human = new Human1(2,"Purple",'female','Jannah');

$beings = [$cat,$dog,$human];

foreach($beings as $being)
{
    $being->communicate();
};