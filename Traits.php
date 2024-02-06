<?php

trait attrProduct {

    private $title;
    private $price;
    private $image;
    private $description;

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

        if(is_string($price) || $price <=0)
            throw new Exception ('$price non può essere scritto in lettere o non deve essere minore di 0');

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