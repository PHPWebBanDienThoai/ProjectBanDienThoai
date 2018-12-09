<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
            include 'BO/ProductsBO.php';
            $productsbo = new ProductsBO; 
            
            $list = $productsbo->getListProducts();
            $n = count($list);  
            
            for($i = 0 ; $i < $n ; $i++)
                {
                    $product = $list[$i];
                    echo $product->getName();
                }
        ?>
        
        
        
    </body>
</html>
