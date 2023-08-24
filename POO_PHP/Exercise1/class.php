<?php

class  Rectangle
{
    private $height;
    private $width;

    public function __construct($height,$width)
    {
        $this->$height = $height;
        $this->$width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->height;
    }

    public function calculatorPerimeter()
    {
        return 2*($this->width + $this->height);
    }

    public function calculatorArea()
    {
        return $this->width * $this->height;
    }

    public function isSquare()
    {
        if($this->width == $this->height) return "Is Square";
        else return "Is not Square";
    }

}

?>