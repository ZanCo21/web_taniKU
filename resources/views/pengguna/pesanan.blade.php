@extends('index_master')
@section('konten')
    <div class="card2" style="width: 20%; height: 450px; background-color: #1984F1; margin-left: 25.2%; margin-top: 60px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25)">
      <h2 style="margin-left: 30%; font-weight: bold; color: white; margin-top: 70px;">TaniKu</h2>
    </div>
    <div class="" style="width: 25rem; height: 450px; margin-top: -450px; float: right; margin-right: 25.2%; background-color: white; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.10);">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body" style="align-items: center;">
          <h4 class="card-title" style="font-weight: bold; color: blue; margin-left: 10%; margin-top: 10px;">Payment</h4>
          <p style="margin-left: 50%; font-weight: bold; color: darkgrey; margin-top: -10px;">{{ $order->created_at }}</p>
          <hr>
          <p style="font-weight: bold;">Hello {{ $order->name }}</p>
          <p style="font-weight: bold; color: darkgrey;">Order Items.</p>
          <p class="card-text" style="font-weight: bold; margin-top: -10px;">{{ $order->barang }}</p>
        </div>
        <div class="total">
            <p style="margin-left: 4%; margin-top: 30px; font-size: large;">SubTotal</p>
            <p style="margin-left: 74%; margin-top: -43px; font-size: large;">Rp.{{ $order->total_harga }}</p>
            <p style="margin-left: 4%; margin-top: -10px; font-size: large;">Shipping<p>
            <p style="margin-left: 74%; margin-top: -43px; font-size: large;">Rp.{{ $order->total_harga }}<p>
            <hr>
            <p style="margin-left: 5%; font-size: large; font-weight: bold;">Total</p>
            <p style="margin-left: 74%; margin-top: -45px; font-size: large; color: green; font-weight: bold;">Rp.{{ $order->total_harga }}</p>
            {{-- <li class="list-group-item " style="color: white;"><p class="bg-danger p-2" style="width: fit-content;">{{ $order->status }}</p></li> --}}
        </div>
        <div class="card-body">
          <a href="#" class="btn btn-primary card-link" style="margin-left: 74%;" id="pay-button">Pay Now</a>
        </div>
      </div>
      <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              // alert("payment success!"); 
              window.location.href = '/invoice/{{$order->id}}';

              $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });

              $.ajax({
              method: "GET",
              url: "/sendinvoice/{{$order->id}}",
              data: "",
              dataType: "",
              success: function (response){
                console.log("done send email")
            }
          });

              console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
@endsection