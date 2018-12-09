<!DOCTYPE html>
<?php
    include 'BO/ProductsBO.php';
    $id = $_GET['id'];
    $productbo = new ProductsBO();
    $product = $productbo->getProductWithId($id);
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/HOME.css">
    <link rel="stylesheet" href="assets/css/PRODUCT.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap-3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 HeaderTop">
                <div class="row">
                    <div class="col-sm-6 HeaderTop__left">
                        <select name="" id="">
                            <option value="">CATEGORY</option>
                        </select>
                        <form action="" class="HeaderTop__left__form">
                            <input type="text" placeholder="Find your phone">
                            <a href="#"><i class="fas fa-search"></i></a>
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
                        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
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
            <div class="col-sm-12 Product">
                <div class="row">
                    <div class="col-sm-12 Product__title">
                        <h4> <?php echo $product->getName() ?> </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 Product__content">
                        <div class="row">
                            <div class="col-sm-4 Product__content__left">
                                <img src="<?php echo $product->getImage() ?>" style="width: 300px; height: 320px;">
                            </div>
                            <div class="col-sm-8 Product__content__right">
                                <ul class="Product__content__right__ul">
                                    <li><span class="a"> <?php echo number_format($product->getPrice()).' VNĐ' ?></span><span><a href="CART.php?id=<?php echo $id?>"><i class="fas fa-shopping-cart cart"></i></a></span></li>
                                    <li><span class="b">Screen</span><span> <?php echo $product->getScreen() ?>  pixels</span></li>
                                    <li><span class="c">OS:</span><span> <?php echo $product->getOs() ?> </span></li>
                                    <li><span class="d">Camera:</span><span> <?php echo $product->getCamera() ?> </span></li>
                                    <li><span class="e">Front Camera</span><span> <?php echo $product->getFrontcamera() ?> </span></li>
                                    <li><span class="f">CPU:</span><span> <?php echo $product->getCpu() ?> </span></li>
                                    <li><span class="g">RAM:</span><span> <?php echo $product->getRam() ?> </span></li>
                                    <li><span class="h">Memory:</span><span> <?php echo $product->getMemory() ?> </span></li>
                                    <li><span class="i">SIM:</span><span> <?php echo $product->getSim() ?> </span></li>
                                    <li><span class="j">PIN:</span><span> <?php echo $product->getPin() ?> </span></li>
                                    <li><span class="k">Waranty</span><span> <?php echo $product->getWarranty() ?> </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 Product__Footer">
                        <a href="HOME.php">Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12 Follow">
                    <h4>FOLLOW ME ON SOCIAL MEDIA</h4>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
    </div>
</body>
</html>