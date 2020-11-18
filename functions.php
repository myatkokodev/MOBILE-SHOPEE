<?php
    //require MySql connection
    require("database/DBcontroller.php");

    //require Product Class
    require("database/Product.php");

    //require Cart Class
    require("database/cart.php");

    //DB controller object
    $db = new DBcontroller();

    //Product object
    $product = new Product($db);

    $product_shuffle = $product->getData();


    //cart object 
    $Cart = new Cart($db);