<?php

class CartBEAN {
    private $id;
    private $name;
    private $price;
    private $quantity;
    private $total;
    private $image;
    
    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }

        function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }


    function getTotal() {
        return $this->total;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


    function setTotal($total) {
        $this->total = $total;
    }

    function __construct($id, $name, $price,$image , $quantity) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->total = $price*$quantity;
        $this->image = $image;
    }

}
