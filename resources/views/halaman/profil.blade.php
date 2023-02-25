@extends('index_master')


@section('konten') 
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="/styledashboard/profil.css">
<div class="container">
<iconify-icon icon="radix-icons:arrow-left" width="30" height="30"></iconify-icon>
</div>
<div class="gambarrr">
    <img src="/img/idcard.jpg" alt="" style="margin-left: 5%;">
</div>
<div class="teks">
    <h5>Biodata Diri</h5>
    <p>Nama</p>
    <p class="nama">Syawal Waskito</p>
    <p style="margin-top: 13px;">Tanggal Lahir</p>
    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/> 
    <hr>
</div>
<div class="kontak">
<h5>Kontak</h5>
<p>Email</p>
<p class="email">Syawalwaskito@gmail.com</p>
<p>Nomor Hp</p>
<p class="number"></p>
</div>
<div class="mb-10">
<button class="btn-primary3">Edit Profile</button>
</div>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
@endsection