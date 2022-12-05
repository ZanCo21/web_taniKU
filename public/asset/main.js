// quantity
// jQuery(document).ready(($) => {
//     $('.quantity').on('click', '.plus', function(e) {
//         let $input = $(this).prev('input.qty');
//         let val = parseInt($input.val());
//         $input.val( val+1 ).change();
//     });

//     $('.quantity').on('click', '.minus', 
//         function(e) {
//         let $input = $(this).next('input.qty');
//         var val = parseInt($input.val());
//         if (val > 0) {
//             $input.val( val-1 ).change();
//         } 
//     });
// });

// tambah kurang quantity
$(document).ready(function (){
    $('.increment-btn').click( function(e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {

            value++;
            $(this).closest('.product_data').find('.qty').val(value);
        }
    });

    $('.decrement-btn').click( function(e) {
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty').val();

        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {

            value--;
            $(this).closest('.product_data').find('.qty').val(value);
            
        }
    }); 
});

//     $('.quantity').on('click', '.minus', 
//         function(e) {
//         let $input = $(this).next('input.qty');
//         var val = parseInt($input.val());
//         if (val > 0) {
//             $input.val( val-1 ).change();
//         } 
//     });
// });

$('.delete-cart-item').on('click', function(e) {
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
   
    $.ajax({
        method: "POST",
        url: "delete-cart-item",
        data: {
            'prod_id': prod_id,
        },
        dataType: "",
        success: function (response){
            window.location.reload();
            swal(response.status, "success");
        }
    });
});

$('.changeQuantity').click(function (e){
    e.preventDefault();

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var qty = $(this).closest('.product_data').find('.qty').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    data = {
        'prod_id' : prod_id,
        'qty' : qty,
    }

    $.ajax({
        method: "POST",
        url: "update-cart",
        data: data,
        success: function (response){
            window.location.reload();
        }
    });        
    
   });


$(document).ready(function (){
   $('.addToCartBtn').click(function (e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_stok = $(this).closest('.product_data').find('.qty').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_stok': product_stok,
            },
            dataType: "",
            success: function (response){
                swal(response.status);
            }
        });

        

   });
   
//    slideshow
   var counter = 1;
   setInterval(function(){
       document.getElementById('radio'+ counter).checked = true;
       counter++;
       if(counter > 4){
           counter = 1;
       }
   }, 3500);
});