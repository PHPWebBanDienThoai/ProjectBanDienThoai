<!DOCTYPE html>
<?php
    include 'BO/ProductsBO.php';
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap-3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/HOME.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 HeaderTop">
                <div class="row">
                    <div class="col-sm-6 HeaderTop__left">
                        <select name="" id="" style="padding: 7px; border-radius: 5px">
                            <option value="">CATEGORIES</option>
                        </select>
                        <form action="" class="HeaderTop__left__form">
                            <input type="text" style="padding: 7px 80px 7px 5px; border-radius: 5px" placeholder="Find your phone">
                            <span><i class="fas fa-search" style="padding: 10.5px; border-radius: 5px"></i></span>
                        </form>
                    </div>
                    <div class="col-sm-6 HeaderTop__right">
                        <?php
                            
                            if(isset($_SESSION['username']))
                            {
                                $name = $_SESSION['username'];
                                echo ("<a href='' class='login'>$name</a>");
                            }    
                            else {
                                echo ("<a href='Login.php' class='login'>LOGIN</a>");
                            }
                        ?> 
                        <a href="CART.php"><i class="fas fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 HeaderMiddle">
                <img src="assets/img/Note9.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 Content-Top">
                <div class="row">
                    <div class="col-sm-12 Content-Top__tittle">
                        <h3><b style="font-size: 30px">DANH SÁCH ĐIỆN THOẠI</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 Content-Top__product">
                        <div class="row">
                            <?php
                            $productsbo = new ProductsBO; 
                            $list = $productsbo->getListProducts();
                            $n = count($list);  

                            for($i = 0 ; $i < $n ; $i++)
                                {
                                    $product = $list[$i];
                           ?>
                            <div class="col-sm-4 Content-Top__product__first">
                                <div class="row">
                                    <div class="col-sm-3 Content-Top__product__first__img">
                                        <img src="<?php echo $product->getImage()?>" style="width: 55px; height: 70px;">
                                    </div>
                                    <div class="col-sm-7 Content-Top__product__first__para">
                                        <div class="row">
                                            <div class="col-sm-12 Content-Top__product__first__para__title">
                                                <span> <?php echo $product->getQuantity() ?> </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 Content-Top__product__first__para__h4">
                                                <a href="ProductDetail.php?id=<?php echo $product->getId() ?>"><h4 style="color: black"><?php echo $product->getName()?></h4></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 Content-Top__product__first__para__money">
                                                <span style="font-weight: bold;"> <?php echo number_format($product->getPrice()).' VNĐ' ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 Content-Top__product__first__cart">
                                           <a href="CART.php?id=<?php echo $product->getId()?>"><i class="fas fa-shopping-cart market"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 Follow">
                <h4 style="font-weight: bold; font-size: 24px">FOLLOW ME ON SOCIAL MEDIA</h4>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 Footer">
                <span>Bản quyền thuộc về công ty điện thoại © 2018</span>
            </div>
        </div>
    </div>
</body>
</html>