@extends('layouts.main')

@section('konten')
    <div class="container">
        @include('partials.carousel')
    </div>

    <div class="container mt-5">
        <div class="judul-kategori">
            <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
        </div>
        <div class="row text-center row-container mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/baju.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Baju</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/celana.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Celana</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/elektronik.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Elektronik</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/fotografi.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Fotografi</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/hp.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Handphone & Aksesoris</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/jamtangan.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Jam Tangan</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/kecantikan.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Kecantikan</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/kesehatan.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Kesehatan</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/laptop.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Komputer & Aksesoris</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/otomotif.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Otomotif</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/sepatu.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Sepatu</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/kategori/tas.png" class="img-kategori mt-3" alt=""></a>
                    <p class="mt-2">Tas</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="judul-produk">
            <h5 class="text-center" style="margin-top: 5px;">PRODUK</h5>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Headset</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 270.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Kemeja</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 80.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Sepatu</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 165.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Jam Tangan</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 100.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Hand Sanitizer</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 35.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Tas</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 97.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Kamera</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 3.700.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Celana</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 320.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="assets/produk/produk9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Keyboard</h6>
                      <div class="icon-bintang" style="color: orange;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p class="card-text mt-2">Rp 125.000,-</p>
                      <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
