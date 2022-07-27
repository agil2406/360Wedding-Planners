@extends('layouts.app')

@section('title')
Paket Akad Benjalur WO
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
                                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="" >
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="" >
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="d-block w-100" alt="" >
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
                                <div class="container">
                                    <h4>Detail</h4>
                                    <p>INTIMATE WEDDING PACKAGE 2022 (FULL PACKAGE PLANNER)
                                        - Providing Wedding Planner & Organizer services for wedding ceremony & reception with a max. of 100 guests <br>
                                        - Half-Day (crew members to stand by 4 hours prior to the event) <br>
                                        - Providing 5 crew members on the day <br>
                                        - Work starts upon the signing of Letter of Agreement and Down Payment, up to 1 year prior to the event. A wedding questionnaire is to be filled in in order to provide more details of the wedding concept, budget, style, and theme. <br>
                                        - Unlimited online consultation and 1 Technical Meeting
                                    </p>
                                    <p class="baca_selengkapnya text-center">Baca Selengkapnya...</p>
                                        <div class="pesan">
                                            <p>
                                            - Carrying out timelines, budgeting plan, and wedding checklist according to your needs and preference <br>
                                            - Providing wedding guidance book as our guideline during your wedding day <br>
                                            - Strategically assembling the most suitable vendors based on the questionnaire <br>
                                            - Scheduling vendors’ coordination meetings and becoming the contact person for all vendors <br>
                                            - Arranging a family meeting for both sides of the family <br>
                                            - Arranging a technical meeting with all the booked vendors to oversee each and every detail of the wedding for a seamless execution <br>
                                            - Monitoring all the booked vendors during preparation and execution <br>
                                            - Ensuring that everything runs smoothly by paying attention to every detail <br>
                                            - Providing wedding report <br>
                                            - Valid for weddings until 31st December 2022
                                            </p>
                                            <p class="sembunyikan center">sembunyikan</p>
                                        </div>
                                    </div>
                            </div>
                        </section>
                        <hr>

                        <section class="vendor mt-4">
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
                                <div class="row">
                                    <div class="col-md-12 mr-3 mt-3">
                                        <p>harga</p>
                                    </div>
                                </div>
                                <div class="row justify-content-center center">
                                    <div class="col-md-3 text-center center" style="background-color: salmoon ;">
                                        <p class="mb-0 small text-center">Hemat</p>
                                        <p>5000k</p>

                                    </div>
                                    <div class="col-md-9">
                                        <p class="mb-0" style="text-decoration: line-through;">IDR 52.000.000,00</p>
                                        <p><b>IDR 5.000.000,00</b></p>
                                    </div>
                                </div>
                                <hr>
                                <p class="small mb-0">kapasitas</p>
                                <p><b>100 pax</b></p>
                                <div class="d-flex justify-content-center align-items-center center">
                                    <div class="justify-content-center align-items-center center mb-3">
                                        <button class="btn btn-primary tn-block gradient-custom-2" data-bs-toggle="modal" data-bs-target="#basicModal" type="submit">pesan sekarang</button>
                                        <button class="btn btn-primary tn-block gradient-custom-2" type="submit">chat me</button>
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
                                                                        <div class="col-sm-2">
                                                                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="rounded-1" width="90px"  alt="" >
                                                                        </div>
                                                                        <div class="col-sm-9">
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
                                                            <a href="/detail-order" class="btn btn-primary tn-block gradient-custom-2 mb-4"> Bayar Lunas - IDR 5,000.000</a>
                                                            


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

                        <div class="card card-galery">
                            <div class="container">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="" >
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

                        <a href=""style="text-decoration: none; color:black;">
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
    </section>

@endsection