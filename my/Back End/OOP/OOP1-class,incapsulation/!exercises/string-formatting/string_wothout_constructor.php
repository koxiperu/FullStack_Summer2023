<?php
class HtmlStringq {
    private $string;

    public function setString($string) 
    {
        if (!empty($string)) {
            $this->string = $string;
        } else {
            echo "Input smth!";
        }
    }
    public function getString()
    {
        return $this->string;
    }
    public function getBoldString()
    {
        return "<b>$this->string</b>";
    }
    public function getItalicString()
    {
        return "<em>$this->string</em>";
    }
    public function getItalicBoldString()
    {
        return "<em><b>$this->string</b></em>";
    }

}

$myString = new HtmlStringq();
$myString->setString('Blalalalalalalalalalalala lalalalla lalalalal');
echo $myString->getString();
echo "<br>-----------------<br>";
echo $myString->getBoldString();
echo "<br>-----------------<br>";
echo $myString->getItalicString();
echo "<br>-----------------<br>";
echo $myString->getItalicBoldString();
?>