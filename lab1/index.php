<?php

$menu = [
    'Home',
    'Shop page',
    'Single product',
    'Cart',
    'Checkout',
    'Category',
    'Others',
    'Contact'];
$image = [
    'img/product-2.jpg',
    'img/product-1.jpg',
    'img/product-3.jpg',
    'img/product-4.jpg',
    'img/product-2.jpg',
    'img/product-1.jpg',
    'img/product-3.jpg',
    'img/product-4.jpg',
];
$name = [
    'Lumia',
    'Samsung',
    'LG',
    'SONY',
    'Lumia',
    'Samsung',
    'LG',
    'SONY',
];
$price = [
    '6,350,000đ',
    '7,200,000đ',
    '2,600,000đ',
    '9,100,000đ',
    '6,350,000đ',
    '7,200,000đ',
    '2,600,000đ',
    '9,100,000đ',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="#"><img src="img/logo.png"></a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                        for ($i = 0; $i < count($menu); $i++) {
                    ?>
                    <li><a href="#"><?php echo $menu[$i] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop ĐẠI ĐẸP TRAI ^^</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < 8; $i++) {
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="<?php echo $image[$i] ?>" alt="">
                    </div>
                    <h2><a href=""><?php echo $name [$i] ?></a></h2>
                    <div class="product-carousel-price">
                        <ins><?php echo $price[$i] ?></ins>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="#">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>