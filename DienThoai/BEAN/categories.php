<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categories
 *
 * @author FappyBird
 */
class categories {
    var $id;
    var $name;
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    
    function categories(){
        
    }
}
?>