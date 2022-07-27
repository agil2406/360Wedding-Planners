@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')
    <section class="Hero">
        <div class="row">
            <div class="jumbotron2" >
                <div class="container">
                    <h1 class="display-4"> Wedding Organizer</h1>
                    <p>Temukan wedding organizer pilihan anda</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wedding-org mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('frontend/assets/img/party.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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