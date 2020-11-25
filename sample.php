<?php

class Fruit
{
    /* @var string name of the fruit. */
    public $name;

    /* @var string color of the fruit. */
    public $color;

    /**
     * Fruit constructor.
     *
     * @param $name
     * @param $color
     */
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * Display an introduction of the fruit.
     */
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
