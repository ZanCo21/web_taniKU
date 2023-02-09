<x-mail::message>
## {{ $order->name }}
# Order Gagal

Barang {{ $order->barang }}
Status <b>{{ $order->Status }}</b>


<x-mail::button :url="''">
Button Text
</x-mail::button>

You Can Order Again,<br>
{{ config('app.name') }}
</x-mail::message>
