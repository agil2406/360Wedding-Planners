@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')
    <section class="Hero">
        
    </section>

    <section class="wedding-org mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card align-items-center">
                        <img src="{{url('frontend/assets/img/wedding.jpg')}}" width="200px" height="200" class="rounded-circle mt-3"  alt="">
                        <div class="card-body center">
                            <h5 class="card-title">Belanjur Wedding Organizer</h5>
                            <p class="card-text"><b>Lombok, ID</b></p>
                            <p>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                3/5
                            </p>
                            <a href="/detail-wo" class="btn btn-primary tn-block gradient"> Daftar paket</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card align-items-center">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" width="200px" height="200" class="rounded-circle mt-3"  alt="">
                        <div class="card-body center">
                            <h5 class="card-title">Ayodiya Wedding Organizer</h5>
                            <p class="card-text"><b>Lombok, ID</b></p>
                            <p>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                3/5
                            </p>
                            <a href="/ayodiya-wo" class="btn btn-primary tn-block gradient"> Daftar paket</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card align-items-center">
                        <img src="{{url('frontend/assets/img/potrait.jpg')}}" width="200px" height="200" class="rounded-circle mt-3"  alt="">
                        <div class="card-body center">
                            <h5 class="card-title">Janur Kuning Wedding Organizer</h5>
                            <p class="card-text"><b>Lombok, ID</b></p>
                            <p>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                3/5
                            </p>
                            <a href="/janur-kuning-wo" class="btn btn-primary tn-block gradient"> Daftar paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>