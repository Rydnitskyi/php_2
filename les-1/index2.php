<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class itemProduct extends Product {
    public $photo;

    public function __construct($name, $price, $photo)
    {
        $this->photo = $photo;
        parent::__construct($name, $price);
    }
}