<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/CART.css">
    <link rel="stylesheet" href="assets/bootstrap-3/css/bootstrap.min.css">
        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<?php
include 'BO/ProductsBO.php';
include 'BEAN/CartBEAN.php';
session_start();
$productbo = new ProductsBO; 
$listcart = array();
if(isset($_GET['delete']))
    $_SESSION['listcart'] = NULL;
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $listcart = $_SESSION['listcart'];
    $n = count($listcart);
    echo $n;
    for($i = 0 ; $i < $n ; $i++)
    {
        $hang = $listcart[$i];  
        if($hang->getId()==$id)
            {  
                echo $hang->getId();
                unset($listcart[$i]);
            }
    }
   $_SESSION['listcart'] = $listcart; 
}

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $product = $productbo->getProductWithId($id);
    $cart = new CartBEAN($id, $product->getName(), $product->getPrice(), $product->getImage(), 1);
    
    if(isset($_SESSION['listcart'])==0)
    {
        array_push($listcart, $cart);  
        $_SESSION['listcart'] = $listcart;
        //echo 'Da tao moi mot session';
    } 
    else
    {
        $listcart = $_SESSION['listcart'];
        $kt = 0;
        foreach ($listcart as $cartA) {
            // Neu mat hang da co trong gio hang thi thay doi so luong
            if($cartA->getId()==$id)
            {  
                $n = $cartA->getQuantity();
                $cartA->setQuantity($n + 1);
                $cartA->setTotal($cartA->getPrice()*$cartA->getQuantity()); 
                $kt = 1;
            }
        }
        
        //Neu mat hang chua co trong gio hang thi them moi
        if($kt==0)
            array_push($listcart, $cart);    
        $_SESSION['listcart'] = $listcart;
    }
}
$listcart = $_SESSION['listcart'];
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 Header">
                <h3>DANH SÁCH GIỎ HÀNG CỦA BẠN</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 Content">
                <table class="table table-bordered">
                    <tr>
                        <th>image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    
                    <?php
                    $TongTien = 0;
                    if($listcart==NULL)
                        echo ("<div class='container-fluid' style='text-align: center; color: red'><h3>Giỏ hàng trống</h3></div>");
                    else
                    foreach ($listcart as $cartb)
                    {
                         $TongTien = $cartb->getTotal();
                    ?>
                    <tr>
                        <td><img src="<?php echo $cartb->getImage() ?>" alt="" style="width: 55px; height: 70px;"></td>
                        <td><span> <?php echo $cartb->getName() ?> </span></td>
                        <td><span><?php echo number_format($cartb->getPrice()).' VNĐ' ?> </span></td>
                        <td><span> <?php echo $cartb->getQuantity() ?> </span></td>
                        <td>
                            <span>
                                <form action="CART.php?updateid=5">
                                    <input type="number" style="width: 30%;" name="soluong" value="<?php echo $cartb->getQuantity() ?>">
                                    <input type="hidden" name="updateid" value="<?php echo $cartb->getId() ?>">
                                    <input class='btn btn-success' type="submit" value="Cập nhật">
                                </form>
                            </span>
                        </td>
                        <td><span><?php echo number_format($cartb->getTotal()).' VNĐ' ?> </span></td>
                        <td><span><a href="CART.php?deleteid=<?php echo $cartb->getId()?>"><i class="far fa-trash-alt"></i></a></span></td>
                    </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="5">Total</td>
                        <td colspan="2"><?php echo number_format($TongTien).' VNĐ'?></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <a href="HOME.php" class="continue">Trang chủ</a>
                            <a href="CART.php?delete=1" class="empty">EMPTY</a>
                            <?php
                                if($listcart!=NULL)
                                    echo ("<a href='MARKET.php' class='order'>Đặt hàng</a>");
                            ?>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>