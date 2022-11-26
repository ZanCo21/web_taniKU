jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val( val+1 ).change();
    });

    $('.quantity').on('click', '.minus', 
        function(e) {
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val( val-1 ).change();
        } 
    });
});


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