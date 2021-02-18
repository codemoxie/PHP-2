<?php


class Electronics extends Product
{
    private $memory;


    public function getMemory()
    {
        return $this->memory;
    }

    public function __construct($name, $price, $memory)
    {
        parent::__construct($name, $price, $memory);
    }
}

$phone = new Electronics('Nokia', '200$', '256MB');