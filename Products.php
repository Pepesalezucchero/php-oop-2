<?php

class Product {
    private $title;
    private $price;
    private $image;
    private $description;

    public function __construct($title, $image, $price, $description) {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
        $this->setDescription($description);
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}

?>