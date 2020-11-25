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
}
