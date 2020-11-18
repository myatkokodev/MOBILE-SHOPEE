<?php
    //ob_start();
    //include header.php file
    include("header.php");
?>

<?php 

    /* include cart item if it not empty */

    count($product->getData('cart')) ?  include("Template/_cart-template.php") :  include("Template/notFound/cart_notFound.php");
   
    /* include cart item if it not empty */
    

    /*include wishlist area*/
    count($product->getData('wishlist')) ?  include("Template/_wishlist_template.php") :  include("Template/notFound/wishlist_notFound.php");
    /*include wishlist area*/

    
    /*include top sale area*/
    //include("Template/_new-phones.php");   
    /*include top sale area*/

    include("Template/_new-phones.php");

?>


<?php
    //include footer.php file
    include("footer.php");     
?>