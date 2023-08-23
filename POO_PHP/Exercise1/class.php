<?php

class  Rectangle
{
    private $height;
    private $width;

    public function __construct()
    {
        $this->$height = 1;
        $this->$width = 1;
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

    public calculatorPerimeterArea()
    {
        
    }

}

?>