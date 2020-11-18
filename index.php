<?php
    ob_start();
    //include header.php file
    include("header.php");
?>

<?php 
    /* include banner area */
    include("Template/_banner-area.php"); 
    /* include banner area*/


    /*include top sale area*/
    include("Template/_top-sale.php");  
    /*include top sale area*/

    /* include special price area */
    include("Template/_special-price.php");
    /* include special price area*/

    /* include banner ads area */
    include("Template/_banner-ads.php");
    /* include banner ads area */

    /* include new phones area */
    include("Template/_new-phones.php");
    /* include new phones area */

    /* include blogs area */
    include("Template/_blogs.php");
    /* include blogs area */

?>

<?php
    //include footer.php file
    include("footer.php");     
?>
