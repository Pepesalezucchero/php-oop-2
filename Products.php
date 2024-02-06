<?php

include 'Traits.php';

class Product {

    use attrProduct;

    public function __construct($title, $image, $price, $description) {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
        $this->setDescription($description);
    }
}

?>