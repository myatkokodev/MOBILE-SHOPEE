<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>
    <!--Bootstrap css files-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!--owl carousel css files-->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">

    <!--fontawesome css file-->
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <!--custom css file-->
    <link rel="stylesheet" href="style.css">

    <?php 
      require('functions.php');
    ?>

</head>
<body>

    <!--================Start Header================-->
        <header id="header"> 
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">
                    Jordan Calderon 430-985 Eleifend St. Duluth Washington 92611 (427) 930-5255
                </p>
                <div class="font-rale font-size-14">
                    <a href="#" class="px-3 border-left border-right text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
                </div>
            </div>

            <!--primary navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">Mobile Shopee</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comming Soon</a>
                    </li>

                  </ul>

                  <form action="#" class="font-size-14 font-rale">
                      <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                          <span class="font-size-16 px-2 text-white">
                              <i class="fas fa-shopping-cart"></i>
                          </span>
                          <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData($table='cart')); ?></span>
                      </a>
                  </form>
                </div>
              </nav>
            <!--end primary navigation-->
        </header>
    <!--================End Header================-->

    <!--================Start Main Site================-->
        <main id="main-site">