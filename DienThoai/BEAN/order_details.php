<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order_details
 *
 * @author FappyBird
 */
class order_details {
    var $id;
    var $order_id;
    var $product_id;
    var $quantity;
    function getId() {
        return $this->id;
    }

    function getOrder_id() {
        return $this->order_id;
    }

    function getProduct_id() {
        return $this->product_id;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setOrder_id($order_id) {
        $this->order_id = $order_id;
    }

    function setProduct_id($product_id) {
        $this->product_id = $product_id;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function __construct($id, $order_id, $product_id, $quantity) {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }

    function order_details(){}
}
