<?php
class Cat
{
    public $name;
    private $age = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function birthday()
    {
        $this->age++;
        return $this->name . " turned " . $this->age . "!!!";
    }

    static function meow()
    {
        echo "meow!";
    }
}
