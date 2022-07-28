@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')
    <section class="all-paket">
        
    </section>

    <section class="wedding-org mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">All in One</h5>
                            <p class="card-text ">Curry Wedding Organizer</p>
                            <p><b>IDR 23.000.00</b></p>
                            <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2" type="submit">
                                <a href="/paket-akad" style="text-decoration: none; color:white;" >lihat paket</a>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Paket Akad</h5>
                            <p class="card-text">Ayodiya Weeding Organizer</p>
                            <p><b>IDR 23.000.00</b></p>
                            <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2" type="submit">
                                <a href="/paket-akad" style="text-decoration: none; color:white;" >lihat paket</a>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body justify-content-center align-items-center">
                            <h5 class="card-title mb-0">Photo Prewedding</h5>
                            <p class="card-text">Janur Kuning wedding organizer</p>
                            <p><b>IDR 23.000.00</b></p>
                            <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2" type="submit">
                                <a href="/paket-akad" style="text-decoration: none; color:white;" >lihat paket</a>
                            </button>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>