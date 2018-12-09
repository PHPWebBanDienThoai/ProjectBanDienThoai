<?php
include "/../BEAN/products.php";
class ProductsDAO {
    public function getListProducts()
    {
        $dsProducts = array();
        $conn = new mysqli("localhost", "root", "", "selling-mobile");
        mysqli_set_charset($conn,'utf8');
        
        $sql = "SELECT * From products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $product = new products($row["id"], $row["name"], $row["category_id"], $row["price"], $row["quantity"], $row["screen"], $row["os"], $row["camera"], $row["frontcamera"], $row["cpu"], $row["ram"], $row["memory"], $row["sim"], $row["pin"], $row["warranty"], $row["sale"], $row["Image"]);
            array_push($dsProducts, $product);          
        }
        }  
        return $dsProducts;  
    }
    
    public function getProductWithId($id)
    {
        $product;
        $dsproduct = array();
        $conn = new mysqli("localhost", "root", "", "selling-mobile");
        mysqli_set_charset($conn,'utf8');
        
        $sql = "SELECT * From products where id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $product = new products($row["id"], $row["name"], $row["category_id"], $row["price"], $row["quantity"], $row["screen"], $row["os"], $row["camera"], $row["frontcamera"], $row["cpu"], $row["ram"], $row["memory"], $row["sim"], $row["pin"], $row["warranty"], $row["sale"], $row["Image"]);
            array_push($dsproduct,$product);
        }
        }  
        $product = $dsproduct[0];   
        return $product ;  
    }
    
}
    
