<?php
class   products{
    private $id;
    private $name;
    private $category_id;
    private $price;
    private $quantity;
    private $screen;
    private $os;
    private $camera;
    private $frontcamera;
    private $cpu;
    private $ram;
    private $memory;
    private $sim;
    private $pin;
    private $warranty;
    private $sale;
    private $Image;
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getCategory_id() {
        return $this->category_id;
    }

    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getScreen() {
        return $this->screen;
    }

    function getOs() {
        return $this->os;
    }

    function getCamera() {
        return $this->camera;
    }

    function getFrontcamera() {
        return $this->frontcamera;
    }

    function getCpu() {
        return $this->cpu;
    }

    function getRam() {
        return $this->ram;
    }

    function getMemory() {
        return $this->memory;
    }

    function getSim() {
        return $this->sim;
    }

    function getPin() {
        return $this->pin;
    }

    function getWarranty() {
        return $this->warranty;
    }

    function getSale() {
        return $this->sale;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setScreen($screen) {
        $this->screen = $screen;
    }

    function setOs($os) {
        $this->os = $os;
    }

    function setCamera($camera) {
        $this->camera = $camera;
    }

    function setFrontcamera($frontcamera) {
        $this->frontcamera = $frontcamera;
    }

    function setCpu($cpu) {
        $this->cpu = $cpu;
    }

    function setRam($ram) {
        $this->ram = $ram;
    }

    function setMemory($memory) {
        $this->memory = $memory;
    }

    function setSim($sim) {
        $this->sim = $sim;
    }

    function setPin($pin) {
        $this->pin = $pin;
    }

    function setWarranty($warranty) {
        $this->warranty = $warranty;
    }

    function setSale($sale) {
        $this->sale = $sale;
    }

    function getImage() {
        return $this->Image;
    }

    function setImage($Image) {
        $this->Image = $Image;
    }

    function __construct($id, $name, $category_id, $price, $quantity, $screen, $os, $camera, $frontcamera, $cpu, $ram, $memory, $sim, $pin, $warranty, $sale, $Image) {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->screen = $screen;
        $this->os = $os;
        $this->camera = $camera;
        $this->frontcamera = $frontcamera;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->memory = $memory;
        $this->sim = $sim;
        $this->pin = $pin;
        $this->warranty = $warranty;
        $this->sale = $sale;
        $this->Image = $Image;
    }


    
}
?>