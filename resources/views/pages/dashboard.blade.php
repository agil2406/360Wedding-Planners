@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')

<section class="home">
    <div class="d-flex container justify-content-center bg-primary mt-5">
        <div class="home-title mt-5 mt-order">
            <p class="mt-5 mt-order">360 Wedding Planner</p>
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
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($wo as $wo)
            <div class="col center my-2">
                <div class="card-group">
                    <div class="card pt-2">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <img src="{{url('storage'.'/'.$wo->image)}}" class="card-img-top rounded-circle border border-1" alt="" height="160" width="160">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title center">{{$wo->nama_wo}}</h5>
                            <p class="card-text">Lombok, ID</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row my-2">
            <div class="col-md-12 center">
                <button class="btn btn-primary tn-block gradient-custom-2" type="submit">
                    <a href="{{url('/wedding')}}" style="text-decoration: none; color:white;">Lihat Semua Wedding Organizer</a>
                </button>
            </div>
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
                        @foreach ($paket as $paket)
                        <a href="{{url('/all-paket')}}" style="text-decoration: none; color:black;">
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{url('storage'.'/'.$paket->image)}}" alt="">
                                </div>
                                <div class="container">
                                    <h5 class="mb-0"><b>{{$paket->nama_paket}}</b></h5>
                                    <p class="small">by {{$paket->wo->nama_wo}}</p>
                                    <p><b>IDR {{number_format($paket->harga,0)}}</b></p>
                                </div>
                            </div>
                        </a>
                        @endforeach

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
                    <img src="{{url('storage'.'/'.$galery[0]->image)}}" alt="" class="card-img-top">
                </div>
                <div class="col-md-4 center">
                    <h4 class="name">{!!$galery[0]->deskripsi!!}</h4>
                    <p>"The most magaical day ever"</p>
                    <p class="photo">photoshot by Haidar Photograph</p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('storage'.'/'.$galery[1]->image)}}" alt="" class="card-img-top">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-md-6 mb-2">
                    <img src="{{url('storage'.'/'.$galery[2]->image)}}" alt="" class="card-img-top">
                </div>
                <div class="col-md-6 center">
                    <h4>{!!$galery[1]->deskripsi!!}</h4>
                    <p>"Thank you to create our perfect day! <br> Great job! "</p>
                    <p class="photo">photoshot by Haidar Photograph</p>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-md-6 center">
                    <h4>{!!$galery[2]->deskripsi!!}</h4>
                    <p>"A beautiful day full of love, <br> Family and Comunity "</p>
                    <p class="photo">photoshot by Wokt visual & amanah place <br> Photograph</p>
                </div>
                <div class="col-md-6 mb-2">
                    <img src="{{url('storage'.'/'.$galery[3]->image)}}" alt="" class="card-img-top">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection