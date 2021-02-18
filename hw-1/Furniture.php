<?php
include 'Product.php';
class Furniture extends Product
{
    private $material;


    public function getMaterial()
    {
        return $this->material;
    }

    public function __construct($name, $price, $material)
    {
        parent::__construct($name, $price, $material);
    }

    public function buyProduct($name, $price)
    {
        parent::buyProduct($name, $price);
    }
}

$sofa = new Furniture('Диван', '500$', 'Экокожа');
$sofa->buyProduct();