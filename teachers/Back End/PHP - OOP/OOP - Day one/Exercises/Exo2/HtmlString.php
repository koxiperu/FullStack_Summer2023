<?php
class HtmlString
{
    private $string;

    //
    public function __construct($string)
    {
        $this->string = $string;
    }

    //setter
    public function setString(string $newString)
    {
        if(is_string($newString))
            $this->string = $newString;
        else
            echo "Argument must be a String";

    }

    //getters
    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        return "<strong> $this->string </strong>";
    }

    public function getItalicString()
    {
        return "<i> $this->string </i>";
    }

    public function getItalicBoldString()
    {
        return "<strong><i> $this->string </i></strong>";
    }
}