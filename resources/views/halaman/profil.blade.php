@extends('index_master')


@section('konten') 
<link rel="stylesheet" href="/styledashboard/profil.css">
<div class="container">
<iconify-icon icon="radix-icons:arrow-left" width="30" height="30"></iconify-icon>
</div>
<div class="gambarrr">
    <img src="/img/idcard.jpg" alt="">
</div>
<div class="teks">
    <h5>Biodata Diri</h5>
    <p>Nama</p>
    <p class="nama">Syawal Waskito</p>
    <p>Tanggal Lahir</p>
    <p class="date">Tambah Tanggal Lahir</p>
    <p>Jenis Kelamin</p>
    <p class="jenis">Tambah Jenis Kelamin</p>
    <hr>
</div>
<div class="kontak">
<h5>Kontak</h5>
<p>Email</p>
<p class="email">Syawalwaskito@gmail.com</p>
<p>Nomor Hp</p>
<p class="number">Tambah Nomor Hp</p>
</div>
<div class="mb-10">
<button class="btn-primary3">Edit Profile</button>
</div>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
@endsection