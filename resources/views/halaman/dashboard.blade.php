@extends('dashboard_master')

@section('konten')

<div class="main-panel">
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-multiple"></i>
                    </span>
                  <div class="d-flex align-items-center align-self-start">
                    <i class="mdi mdi-people text-primary me-4"></i>
                    <h3 class="mb-0">{{ $user }}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Pelanggan</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-multiple"></i>
                    </span>
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $transaksi }}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Transaksi</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-multiple"></i>
                    </span>
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $kategori }}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">kategori</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-multiple"></i>
                    </span>
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $produk }}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Produk</h6>
            </div>
          </div>
        </div>
      </div>
@endsection