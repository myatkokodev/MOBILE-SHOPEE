<?php 

    //require MySql connection
    require("../database/DBcontroller.php");

    //require Product Class
    require("../database/Product.php");

    //DB controller object
    $db = new DBcontroller();

    //Product object
    $product = new Product($db);

    if(isset($_POST['itemid'])){
        $result = $product->getProducts($_POST['itemid']);
        echo json_encode($result);
    }