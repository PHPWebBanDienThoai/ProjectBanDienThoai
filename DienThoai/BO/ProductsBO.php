<?php
include '/../DAO/ProductsDAO.php';
class ProductsBO {
    private $listproduct;
    public function getListProducts()
    {
        $productsdao = new ProductsDAO;
        $this->listproduct = $productsdao->getListProducts();
        return $this->listproduct;
    }
    
    public function getProductWithId($id)
    {
        $productdao = new ProductsDAO;
        return $productdao->getProductWithId($id);
    }
}

