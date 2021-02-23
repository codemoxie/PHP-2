<?php
//Создать структуру классов ведения товарной номенклатуры.
//а) Есть абстрактный товар.
//б) Есть цифровой товар, штучный физический товар и товар на вес.
//в) У каждого есть метод подсчета финальной стоимости.
//г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
//д) Что можно вынести в абстрактный класс, наследование?

abstract class Product {
    private $productName;
    private $productPrice;
    private $productDiscount;

    public function __construct($productName, $productPrice, $productDiscount) {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productDiscount = $productDiscount;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }

    abstract protected function getTotalProductPrice();
    abstract protected function getProductDiscount();

    public function __toString() {
        return $this->getProductName() . ' стоит ' . $this->productPrice . '. Цена за весь товар: ' . $this->getTotalProductPrice() . '. Скидка составит: ' . $this->getProductDiscount() . '.';
    }
}

class DigitalProduct extends Product {
    private $count;

    public function __construct($productName, $productPrice, $productDiscount, $count) {
        parent::__construct($productName, $productPrice, $productDiscount);
        $this->count = $count;
    }

    public function getCount() {
        return $this->count;
    }

    public function getTotalProductPrice() {
        $count = $this->getCount();
        $productPrice = $this->getProductPrice();

        if ($count >= 10) {
            $finalPrice = $productPrice * $count * 0.90;
        } elseif ($count >= 5 && $count < 10) {
            $finalPrice = $productPrice * $count * 0.95;
        } else {
            $finalPrice = $productPrice * $count;
        }
        return $finalPrice;
    }

    public  function getProductDiscount() {
        $productPrice = $this->getProductPrice();
        return ($this->count * $productPrice) - $this->getTotalProductPrice();
    }

    public function __toString() {
        return 'Вы выбрали ' . $this->getCount() . ' ' . $this->getProductName() . '. ' . parent::__toString();
    }
}

class PieceProduct extends DigitalProduct {

    public function __construct($productName, $productPrice, $productDiscount, $count)
    {
        parent::__construct($productName, $productPrice, $productDiscount, $count);
    }

    public function getTotalProductPrice()
    {
        // TODO: Implement getTotalProductPrice() method.
    }

    public  function getProductDiscount()
    {
        // TODO: Implement getProfit() method.
    }
}

class WeightProduct extends Product {
    private $weight;

    public function __construct($productName, $productPrice, $productDiscount, $weight)
    {
        parent::__construct($productName, $productPrice, $productDiscount);
        $this->weight = $weight;
    }

    public function getTotalProductPrice()
    {
        // TODO: Implement getTotalProductPrice() method.
    }

    public  function getProductDiscount()
    {
        // TODO: Implement getProfit() method.
    }
}

$digital = new DigitalProduct('Книга', '250', '', '6');
echo $digital;