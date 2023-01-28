@extends('index_master')
@section('konten')
    <h1>ini pesanan</h1>
    <div class="card ms-2" style="width: 18rem;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title">Order</h5>
          <p class="card-text">{{ $order->barang }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $order->address }}</li>
            <li class="list-group-item">{{ $order->nama_layanan }}</li>
            <li class="list-group-item">Total : Rp. {{ $order->total_harga }}</li>
            {{-- <li class="list-group-item " style="color: white;"><p class="bg-danger p-2" style="width: fit-content;">{{ $order->status }}</p></li> --}}
        </ul>
        <div class="card-body">
          <a href="#" class="btn btn-primary card-link">Detail</a>

          <button id="pay-button">Pay!</button>
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