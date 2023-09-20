<?php
class Human {
    private $name;
    public $haircolor;
    public $gender;
    public $height;

    public function __construct($name, $haircolor, $gender, $height)
    {
        $this->name = $name;
        $this->haircolor = $haircolor;
        $this->gender = $gender;
        $this->height = $height;
    }
    public function __toString()
    {
        return "-------$this->name, ($this->haircolor hair), is a $this->gender and $this->height cm tall--------<br>";
    }
}

$anna = new Human('Anna', 'brown', 'woman', 160);
$tierry = new Human('Tierry', 'blond', 'man', 180);
echo $anna;
echo $tierry;
?>