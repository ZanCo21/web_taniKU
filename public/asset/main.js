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

//    getcity
   $(document).ready(function(){
    //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
    //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian

    $('select[name="provinsi_id"]').on('change', function(){
        
    var namaprovinsi = $("#provinsi_id option:selected").attr("namaprovinsi");
    $("#nama_provinsi").val(namaprovinsi);
    // buat variable provincedid untk menampung data id select province
    let provinceid = $(this).val();
    //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
    if(provinceid){
    // jika di temukan id nya kita buat eksekusi ajax GET
    jQuery.ajax({
    // url yg di root yang kita buat tadi
    url:"/kota/"+provinceid,
    // aksion GET, karena kita mau mengambil data
    type:'GET',
    // type data json
    dataType:'json',
    // jika data berhasil di dapat maka kita mau apain nih
    success:function(data){
        // jika tidak ada select dr provinsi maka select kota kososng / empty
    $('select[name="kota_id"]').empty();
        // jika ada kita looping dengan each
        $.each(data, function(key, value){
        // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
        $('select[name="kota_id"]').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');
        });
        }
        });
        }else {
        $('select[name="kota_id"]').empty();
        }
    });
    });


    // input type hidden
    $('select[name="kota_id"]').on('change', function(){
        // membuat variable namakotaku untyk mendapatkan atribut nama kota
        var namakotaku = $("#kota_id option:selected").attr("namakota");
        // menampilkan hasil nama provinsi ke input id nama_provinsi
        $("#nama_kota").val(namakotaku);
    });

      // input type hidden layanan
      $('select[name="layanan"]').on('change', function(){
        // membuat variable namakotaku untyk mendapatkan atribut nama layanan
        var namalayanan = $("#layanan option:selected").attr("description");
        var namaetd = $("#layanan option:selected").attr("etd");
        var namaharga = $("#layanan option:selected").attr("harga_ongkir");
        var namaserv = $("#layanan option:selected").attr("service");


        // menampilkan hasil nama provinsi ke input id nama_provinsi
        $("#nama_layanan").val(namaserv + ", " +namalayanan +", " +namaetd + " day, " + "Rp." +namaharga);
    });
        

    // get onkir
    $('select[name="kurir"]').on('change', function(){
        // kita buat variable untuk menampung data data dari  inputan
        // name city_origin di dapat dari input text name city_origin
        let origin = $("input[name=city_origin]").val();
        // name kota_id di dapat dari select text name kota_id
        let destination = $("select[name=kota_id]").val();
        // name kurir di dapat dari select text name kurir
        let courier = $("select[name=kurir]").val();
        // name weight di dapat dari select text name weight
        let weight = $("input[name=weight]").val();
        // alert(courier);
        if(courier){
            jQuery.ajax({
            url:"/origin="+origin+"&destination="+destination+"&weight="+weight+"&courier="+courier,
            type:'GET',
            dataType:'json',
            success:function(data){
            $('select[name="layanan"]').empty();
            // ini untuk looping data result nya
            $.each(data, function(key, value){
            // ini looping data layanan misal jne reg, jne oke, jne yes
            $.each(value.costs, function(key1, value1){
            // ini untuk looping cost nya masing masing
            // silahkan pelajari cara menampilkan data json agar lebi paham
            $.each(value1.cost, function(key2, value2){
            // $('select[name="layanan"]').append('<option value="'+ key +'">' + value1.service + '-' + value1.description + '-' +value2.value+ '</option>');
            $('select[name="layanan"]').append('<option value="'+ key +'" harga_ongkir="'+value2.value+'" service="'+value1.service+'" etd="'+value2.etd+'" description="'+value1.description+'">' + value1.service + '-' + value1.description + ', Rp.' +value2.value+ ',' +value2.etd +" day " +'</option>');
            });
            });
            });
            }
            });
            } else {
            $('select[name="layanan"]').empty();
            }
        });
   
// total
        $('select[name="layanan"]').on('change', function(){
            let totalbelanja = $("input[name=harga]").val();

            var harga_ongkir = $("#layanan option:selected").attr("harga_ongkir");

            $("#ongkos_kirim").val(harga_ongkir);
            $("#ongkir").val(harga_ongkir);

            let total = parseInt(totalbelanja) + parseInt(harga_ongkir);
            $("input[id=total]").val(total);

        });

        // $('select[name="layanan"]').on('change', function(){
            
        // });
    
//    slideshow
   var counter = 1;
   setInterval(function(){
       document.getElementById('radio'+ counter);
       counter++;
       if(counter > 4){
           counter = 1;
       }
   }, 3500);

});