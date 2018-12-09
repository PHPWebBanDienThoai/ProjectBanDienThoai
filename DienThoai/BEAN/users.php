<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author FappyBird
 */
class users {
    var $id;
    var $name;
    var $tel;
    var $email;
    var $password;
    var $user_type;
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getTel() {
        return $this->tel;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getUser_type() {
        return $this->user_type;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setUser_type($user_type) {
        $this->user_type = $user_type;
    }

    function __construct($id, $name, $tel, $email, $password, $user_type) {
        $this->id = $id;
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->password = $password;
        $this->user_type = $user_type;
    }
    
    function users(){}
}
