@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
    <section class="Hero">
        <div class="row">
            <div class="jumbotron" >
                <div class="container">
                    <h1 class="display-4"> Remember The Moments</h1>
                </div>
            </div>
        </div>
        
    </section>

    <section class="organizer">
        <div class="container">
            <div class="row">
                <div class=" center">
                    <p class="sub-content">Our Wedding Organizer</p>
                    <p class="text">Kamu dapat memesan dekorasi pernikahanmu dari wedding organizer terbaik, pesan sekarang dan <br> Abadikan
                        momen berkesan anda
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{url('frontend/assets/css/hero.jpg')}}"  alt="">
                        <div class="card-body">
                            <h5 class="card-title">Belanjur Wedding Organizer</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates ipsum esse, inventore similique deserunt. Veniam, at distinctio ex aperiam voluptate aliquam inventore necessitatibus impedit id, ipsa accusantium ullam error.</p>
                            <p style="color: orange;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{url('frontend/assets/css/hero.jpg')}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Belanjur Wedding Organizer</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates ipsum esse, inventore similique deserunt. Veniam, at distinctio ex aperiam voluptate aliquam inventore necessitatibus impedit id, ipsa accusantium ullam error.</p>
                            <p style="color: orange;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{url('frontend/assets/css/hero.jpg')}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Belanjur Wedding Organizer</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates ipsum esse, inventore similique deserunt. Veniam, at distinctio ex aperiam voluptate aliquam inventore necessitatibus impedit id, ipsa accusantium ullam error.</p>
                            <p style="color: orange;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 center">
                <button class="btn btn-primary tn-block gradient-custom-2" type="submit">
                <a href="/wedding-org" style="text-decoration: none; color:white;" >Lihat Semua Wedding Organizer</a>
                </button>
                </div>
            </div>
        </div>
    </section>

    <section class="dashboard-paket mt-5">
    <div class="container">
    <div class="card">
            <div class="row">
                <div class="col-md-12 center">
                     <h4> Paket <br> Wedding Organizer</h4>
                </div>
            </div>
            <div class="row">
                <div class="slider">
                    <div class="dashboard owl-carousel">
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
        </div>
        </div>
    </section>

    <section class="testimoni">
        <div class="row center align-items-center">
            <div class="col-md-12 head">
                <p>Real Couples. Real Love. Real Wedding</p>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="background-color: #ccc ;">
            <div class="container">
                <div class="row py-3">
                <div class="col-md-4">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-4 center">
                        <h4 class="name">Agil & Mira</h4>
                        <p>"The most magaical day ever"</p>
                        <p class="photo">photoshot by Haidar Photograph</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('frontend/assets/img/prewed.jpg')}}" alt="" class="card-img-top">
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-6 mb-2">
                        <img src="{{url('frontend/assets/css/hero.jpg')}}" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-3">
                        <img src="{{url('frontend/assets/img/wedding.jpg')}}" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-3 center">
                        <h4>Juan & Ririn</h4>
                        <p>"Thank you to create our perfect day! <br> Great job! "</p>
                        <p class="photo">photoshot by Haidar Photograph</p>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-3 center">
                        <h4>Angga & Haidar</h4>
                        <p>"A beautiful day full of love, <br> Family and Comunity "</p>
                        <p class="photo">photoshot by Wokt visual & amanah place <br> Photograph</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <img src="{{url('frontend/assets/img/wedding3.jpg')}}" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-3">
                        <img src="{{url('frontend/assets/img/potrait.jpg')}}" alt="" class="card-img-top">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection