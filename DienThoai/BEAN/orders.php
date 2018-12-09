<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orders
 *
 * @author FappyBird
 */
class orders {
    var $id;
    var $user_id;
    var $orderdate;
    var $tel;
    var $address;
    var $total;
    var $status;
    
    function getId() {
        return $this->id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getOrderdate() {
        return $this->orderdate;
    }

    function getTel() {
        return $this->tel;
    }

    function getAddress() {
        return $this->address;
    }

    function getTotal() {
        return $this->total;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setOrderdate($orderdate) {
        $this->orderdate = $orderdate;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function __construct($id, $user_id, $orderdate, $tel, $address, $total, $status) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->orderdate = $orderdate;
        $this->tel = $tel;
        $this->address = $address;
        $this->total = $total;
        $this->status = $status;
    }
    function orders(){
        
    }
}
