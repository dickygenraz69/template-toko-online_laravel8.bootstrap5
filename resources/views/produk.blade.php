@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="css/produk.css">
@endsection
@section('konten')
    <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
            <ol class="breadcrumb p-3">
              <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
              <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row row-produk">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 450px;">
                    <figcaption class="figure-caption d-flex justify-content-evenly">
                        <a href="">
                            <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 70px;">
                        </a>
                        <a href="">
                            <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 70px;">
                        </a>
                        <a href="">
                            <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 70px;">
                        </a>
                        <a href="">
                            <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 70px;">
                        </a>
                        <a href="">
                            <img src="assets/produk/produk4.jpg" class="figure-img img-fluid" alt="..." style="border-radius: 5px; width: 70px;">
                        </a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-7">
                <h4>Jam Tangan</h4>
                <div class="garis-nama"></div>
                <h3 class="text-muted mb-3">Rp 100.000,-</h3>
                <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                <span class="mx-2">1</span>
                <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-plus text-white"></i></button>
                <span class="mx-2">Tersisa 27 buah</span>

                <div class="btn-produk mt-5">
                    <a href="" class="btn btn-dark text-white btn-lg me-2 btn-custom"><i class="fas fa-shopping-cart fs-6 me-2"></i> Masukkan Keranjang</a>
                    <a href="" class="btn btn-warning text-white btn-lg btn-custom">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>

@endsection
