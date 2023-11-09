<?php
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function __destruct()
    {
        echo $this->brand . " is dead";
    }
}
