<?php
    session_start();
    $username = $_SESSION['username'];
    include "../admin_panel/koneksi.php";

    if(isset($_POST['submit'])){
        $product = $_POST['product'];
        $quantity = $_POST['radio_quantity'];
        $duration = $_POST['radio_duration'];
        $images = $_POST['images'];

        if ($_POST['radio_quantity'] == 2 && $_POST['radio_duration'] == "1 Week") {
            $total = 100000;
        }else if ($_POST['radio_quantity'] == 4 && $_POST['radio_duration'] == "1 Week" ) {
            $total = 200000; 
        }else if ($_POST['radio_quantity'] == 6 && $_POST['radio_duration'] == "1 Week"){
            $total = 300000;
        }else if ($_POST['radio_quantity'] == 8 && $_POST['radio_duration'] == "1 Week"){
            $total = 400000;
        }else if ($_POST['radio_quantity'] == 10 && $_POST['radio_duration'] == "1 Week"){
            $total = 500000;
        }

        else if ($_POST['radio_quantity'] == 2 && $_POST['radio_duration'] == "2 Weeks"){
            $total = 2000000;
        }else if ($_POST['radio_quantity'] == 4 && $_POST['radio_duration'] == "2 Weeks"){
            $total = 400000;
        }else if ($_POST['radio_quantity'] == 6 && $_POST['radio_duration'] == "2 Weeks"){
            $total = 600000;
        }else if ($_POST['radio_quantity'] == 8 && $_POST['radio_duration'] == "2 Weeks"){
            $total = 900000;
        }else if ($_POST['radio_quantity'] == 10 && $_POST['radio_duration'] == "2 Weeks"){
            $total = 1000000;
        }

        else if ($_POST['radio_quantity'] == 2 && $_POST['radio_duration'] == "4 Weeks"){
            $total = 4000000;
        }else if ($_POST['radio_quantity'] == 4 && $_POST['radio_duration'] == "4 Weeks"){
            $total = 800000;
        }else if ($_POST['radio_quantity'] == 6 && $_POST['radio_duration'] == "4 Weeks"){
            $total = 1200000;
        }else if ($_POST['radio_quantity'] == 8 && $_POST['radio_duration'] == "4 Weeks"){
            $total = 1600000;
        }else if ($_POST['radio_quantity'] == 10 && $_POST['radio_duration'] == "4 Weeks"){
            $total = 1800000;
        }
        
        $insert = mysqli_query ($koneksi, "INSERT INTO keranjang (Product, username, Duration, 
        Quantity, Total, images)
        VALUES('$product', '$username', '$duration', '$quantity', '$total', '$images')");
    
        if($insert) {
            echo "<script>alert('tambah berhasil')</script>";
        }else {
            echo "failed : " . mysqli_error($koneksi);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package C | Hanelman Catering</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>IDR <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>IDR</li>
                                            <li>USD</li>
                                        </ul>
                                    </li>
                                    <li>INA<span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>INA</li>
                                            <li>ENG</li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?php echo $username?></a> <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li><a href="../form/index.php" style="color:white">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/hmlogo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="./shoping-cart1.php"><img src="img/icon/cart.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li  class="active"><a href="./shop.php">Shop</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Product detail</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Serumah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img class="big_img" src="img/shop/Paket-C1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" method = "post">
                    <div class="product__details__text">
                        <div class="product__label">Paket C</div>
                        <h4>Serumah</h4>
                        <input type="hidden" name="product" value="SERUMAH"/>
                        <input type="hidden" name="images" value="img/shop/Paket-C1.png"/>
                        <h5>Start From IDR 100.000</h5>
                        <div class="quantity">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span>Quantity :</span>
                                    <ul>
                                        <li><input type="radio" name="radio_quantity" value="2"> 2</li>
                                        <li><input type="radio" name="radio_quantity" value="4"> 4</li>
                                        <li><input type="radio" name="radio_quantity" value="6"> 6</li>
                                        <li><input type="radio" name="radio_quantity" value="8"> 8</li>
                                        <li><input type="radio" name="radio_quantity" value="10"> 10</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <span>Duration :</span>
                                    <ul>
                                        <li><input type="radio" name="radio_duration" value="1 Week"> 1 Week</li>
                                        <li><input type="radio" name="radio_duration" value="2 Weeks"> 2 Weeks</li>
                                        <li><input type="radio" name="radio_duration" value="4 Weeks"> 4 Weeks</li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        
                        
                        <div class="product__details__option">
                            <button type="submit" class="primary-btn" name="submit">
                                Add to cart</button>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p>Serumah is a package to make your home more flavorful and make your family feel satisfied. 
                                        This package has various duration options. The minimum quantity that can be ordered for this package is 2 servings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Products Section Begin -->
    <section class="related-products spad">
        <div class="container">
            <!-- WEEK 1 : MONDAY -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Menu Schedule</h2>
                        <span>Week 1 : Monday</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/daging/product-1.jpg">
                                <div class="product__label">
                                    <span>Beef</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Rendang</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/ayam/product-1.jpg">
                                <div class="product__label">
                                    <span>Chicken</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Fried Chicken</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sayur/product-1.jpg">
                                <div class="product__label">
                                    <span>Vegetables</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Capcay</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sup/product-3.jpg">
                                <div class="product__label">
                                    <span>Soup</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Soup</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/kerupuk/product-1.png">
                                <div class="product__label">
                                    <span>Cracker</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Shrimp Cracker</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEEK 1 : TUESDAY -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Week 1 : Tuesday</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/daging/product-2.jpg">
                                <div class="product__label">
                                    <span>Beef</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Black Pepper Beef</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/ayam/product-2.jpg">
                                <div class="product__label">
                                    <span>Chicken</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Grilled Chicken</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sayur/product-2.jpg">
                                <div class="product__label">
                                    <span>Vegetables</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Stir-fried Kangkung</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sup/product-2.png">
                                <div class="product__label">
                                    <span>Soup</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Maccaroni Soup</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/kerupuk/product-1.png">
                                <div class="product__label">
                                    <span>Cracker</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Shrimp Cracker</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEEK 1 : WED -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Week 1 : Wednesday</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/daging/product-3.jpg">
                                <div class="product__label">
                                    <span>Beef</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Rica Rica</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/ayam/product-3.jpg">
                                <div class="product__label">
                                    <span>Chicken</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Chicken Satay</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sayur/product-3.jfif">
                                <div class="product__label">
                                    <span>Vegetables</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Stir-fried Kailan with Oyster Sauce</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sup/product-3.jpg">
                                <div class="product__label">
                                    <span>Soup</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Soup</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/kerupuk/product-1.png">
                                <div class="product__label">
                                    <span>Cracker</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Shrimp Cracker</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEEK 1 : THU -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Week 1 : Thursday</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/daging/product-4.jpg">
                                <div class="product__label">
                                    <span>Beef</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Gulai</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/ayam/product-4.jpg">
                                <div class="product__label">
                                    <span>Chicken</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Chicken Rica Rica</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sayur/product-4.jfif">
                                <div class="product__label">
                                    <span>Vegetables</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Stir-fried Broccoli with Mushrooms</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sup/product-4.jpg">
                                <div class="product__label">
                                    <span>Soup</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Sayur Asem</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/kerupuk/product-1.png">
                                <div class="product__label">
                                    <span>Cracker</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Shrimp Cracker</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEEK 1 : FRI -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Week 1 : Friday</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/daging/product-5.jpg">
                                <div class="product__label">
                                    <span>Beef</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Beef Teriyaki</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/ayam/product-5.jpg">
                                <div class="product__label">
                                    <span>Chicken</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Sweet & Sour Chicken</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sayur/product-5.png">
                                <div class="product__label">
                                    <span>Vegetables</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Stir-fried Pakcoy</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/sup/product-5.jpg">
                                <div class="product__label">
                                    <span>Soup</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Sayur Lodeh</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/kerupuk/product-1.png">
                                <div class="product__label">
                                    <span>Cracker</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Shrimp Cracker</a></h6>
                                <div class="product__item__price"><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                            <a href="paketC.php">1</a>
                            <a href="paketC1.php">2</a>
                            <a href="paketC2.php">3</a>
                            <a href="paketC3.php">4</a>
                            <a href="#"><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/hmlogo1.png" alt=""></a>
                        </div>
                        <p>The catering with the royal touch that making occasions more flavorful and making food more than just-food.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>