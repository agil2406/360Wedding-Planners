@extends('layouts.app')

@section('title')
Paket Akad
@endsection

@section('content')

<section class="header mt-5">
    <div class="container">
        <div class="row">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2 ml-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col-md-10 mt-3">
                            <h4>Akad day</h4>
                            <p>by <span>Benjalur Wedding Organizer</span> - Wedding Organizer </p>
                        </div>
                    </div>
                    <hr>
                    <section class="corousel">
                        <div class="row">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </section>

                    <section class="detail mt-4">
                        <div class="row">
                            
                        </div>
                    </section>
                    <hr>

                    <section class="profil-vendor mt-4">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="" class="rounded-circle" width="100px" height="100px">
                                        </div>
                                        <div class="col-md-9">
                                            <p class="mb-0"><b>Benjalur Wedding Organizer</b></p>
                                            <p class="mb-0">Wedding Organizer - Lombok. ID</p>
                                            <p>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 align-items-center center">
                                    <a href="/benjalur-wo" class="btn btn-primary tn-block gradient-custom-2">Kunjungi Profil Vendor</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>

                    <section class="payment">
                        <div class="container">
                            <div class="row">
                                <div class="h4">Fitur Pembayaran</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><b>Pembagian Pembayaran</b></p>
                                    <p class="mb-0">-Down Payment : 50%</p>
                                    <p>-Pembayaran terakhir: 50%</p>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Informasi tambahan</b></p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae sequi delectus nemo vero expedita est eligendi pariatur modi aliquam, dicta earum sunt cupiditate quidem harum voluptate obcaecati animi ipsum commodi.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-md-4">

                    <div class="card card-galery">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="">
                                    <p class="p-1 mb-0">harga</p>
                                </div>
                               
                            </div>
                            <div class="d-flex">
                                <div class="align-items-center px-3 rounded-3 text-white price" >
                                    <p class="mb-0 mt-2 text-center text-white"><i class="bi bi-gem text-white" ></i></p>
                                    <p>5000k</p>

                                </div>
                                <div class="harga my-auto">
                                    <p class="mt-2 mb-0"><b>paket akad</b></p>
                                    <p class=""><b>IDR 5.000.000,00</b></p>
                                </div>
                            </div>
                            <hr>
                            <p class="small mb-0">kapasitas</p>
                            <p><b>100 pax</b></p>

                        </div>
                    </div>

                    <div class="card card-galery mt-2">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mt-3">jumlah</p>
                                <form action="" class="w-25">
                                    <input type="number" class="form-control" name="sb_bi">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3">
                        <div class="col-sm-6">
                            <button class="btn btn-primary gradient-custom-2 w-100" data-bs-toggle="modal" data-bs-target="#basicModal" type="submit">Order Now</button>

                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-outline-secondary  w-100" type="submit">
                                <i class="fa-solid fa-comment-dots"></i> chat me</button>
                        </div>
                        @auth
                        <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="modal-header justify-content-center">
                                                    <h5 class="modal-title text-center">Pesan Sekarang</h5>
                                                </div>
                                                <div class="card card-galery mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="rounded-1" width="90px" alt="">
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p class="mt-1 mb-0">nama paket</p>
                                                                <p class="small">IDR 5.000.000</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-flex justify-content-start">
                                                    <p>
                                                        Sebelum melanjutkan ke proses pembayaran, mohon lengkapi tanggal layanan Anda terlebih dahulu.
                                                    </p>
                                                </div>

                                                <div class="mb-4">
                                                    <form action="">
                                                        <label for="tanggal-lahir" class="col-form-label">Tanggal Layanan </label>
                                                        <input type="date" class="form-control @error ('tanggal-lahir') is-invalid @enderror" id="tanggal-lahir" name="tanggal-lahir" value="{{ old('tanggal-lahir')}}">
                                                        @error('tanggal-lahir')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </form>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/detail-order" class="btn btn-primary tn-block gradient-custom-2 mb-4 text-center"> Bayar Lunas - IDR 5,000.000</a>
                                                </div>



                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="container">
                                        <div class="card justify-content-center align-items-center p-4 mb-3">
                                            <h4>Silahkan Login terlebih dahulu</h4>
                                            <a href="/login" class="btn btn-primary gradient-custom-2 w-25 m-3">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container">
    <section class="dashboard-paket mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <h3>Paket yang mungkin anda suka</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="slider">
                <div class=" lainnya owl-carousel">
                    <a href="/paket-akad" style="text-decoration: none; color:black;">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="">
                            </div>
                            <div class="container">
                                <h5 class="mb-0"><b>Paket Resto Alfa</b></h5>
                                <p class="small">by Ayodiya Wedding Organizer - Wedding Organizer</p>
                                <p><b>IDR 23.000.00</b></p>
                            </div>
                        </div>
                    </a>

                    <a href="/paket-akad" style="text-decoration: none; color:black;">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{url('frontend/assets/img/prewed.jpg')}}" alt="">
                            </div>
                            <div class="container">
                                <h5 class="mb-0"><b>Akad Package All in</b></h5>
                                <p class="small">by Benjalur Wedding Organinizer - Wedding Organizer</p>
                                <p><b>IDR 52.000.000</b></p>
                            </div>
                        </div>
                    </a>

                    <a href="" style="text-decoration: none; color:black;">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{url('frontend/assets/img/party.jpg')}}" alt="">
                            </div>
                            <div class="container">
                                <h5 class="mb-0 pl-2"><b>Wedding Organizer Resepsi</b></h5>
                                <p class="small">by Curry Wedding Organizer - Wedding Organizer</p>
                                <p><b>IDR 15.000.000</b></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    </div>
</section>

@endsection