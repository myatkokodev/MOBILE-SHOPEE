$(document).ready(function(){
 

    //banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1
    });

    //top sale owl carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: 'fitRows'
    });
    
    //filter items on button click
    $(".button-group").on('click','button',function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    });

     //top sale owl carousel
     $('#new-phones .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        }
    });

    //blogs owl carousel
    $('#blogs .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            }
        }
    });

    //product qty section
    
    //let $input = $(".qty .qty_input");

    //check on quantity up button
    // $qty_up.click(function(e){
    //     //let $input = $('.qty_input', this).data("id");
    //     //et $input = $(`.qty_input[data-id = '$($(this).data("id"))']`);
    //     //let $input = $(`.qty_input[data-id = '$($(this).data("id"))']`);
    //     //console.log($input.val());
    //     //let $input = $(".qty_input[data-id=pro1]");
 
    //     let $input = $(`.qty_input[data-id='$($(this).data("id"))']`);
    //     console.log($input.val());
    //     if($input.val() >= 1 && $input.val() <= 9){
    //         $input.val(function(i,ovdal){
    //             return ++ovdal;
    //         });
    //     }
    // });

    // //check on quantity down button
    // $qty_down.click(function(e){
    //     let $input = $(`.qty_input[data-id='$($(this).data("id"))']`);
    //     if($input.val() > 1 && $input.val() <= 10){
    //         $input.val(function(i,ovdal){
    //             return --ovdal;
    //         });
    //     }
    // });

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change product price using ajax call
        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];
            //console.log(item_price);

            if($input.val() >= 1 && $input.val() <= 9){
                $input.val(function(i, oldval){
                    return ++oldval;
                });

                //console.log($input.val());
                //increse price of the product
                $price.text(parseInt(item_price * $input.val()).toFixed(2));
                //$price.text(parseInt(item_price * $input.val()).toFixed(2)); same but error shit!

                //set subtotal price
                let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }
        }});//closing ajax request
        
    });




    // click on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);


        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];
            //console.log(item_price);

            if($input.val() > 1 && $input.val() <= 10){
                $input.val(function(i, oldval){
                    return --oldval;
                });

                //console.log($input.val());
                //increse price of the product
                $price.text(parseInt(item_price * $input.val()).toFixed(2));
                //$price.text(parseInt(item_price * $input.val()).toFixed(2)); same but error shit!

                //set subtotal price
                let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }
        }});//closing ajax request
        
    });

})