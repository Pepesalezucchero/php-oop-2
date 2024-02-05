<?php

class PetProduct extends Product {
    private $category;

    public function __construct($title, $image, $price, $description, Category $category) {
        parent::__construct($title, $image, $price, $description);
        $this->setCategory($category);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }
}

?>