@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')
<section class="vendor">
    <div class="d-flex container justify-content-center bg-primary mt-5">
            <div class="home-title mt-5 mt-order">
                <p class="mt-5 mt-order">Wedding Organizer</p>
            </div>
    </div>
</section>

<section class="wedding-org mt-4">
    <div class="container mb-3">
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
                            @for ($i = 0; $i < 3; $i++) <i class="fa fa-star checked"></i>@endfor
                                <div class="row my-2">
                                    <div class="justify-content-center">
                                        <a href="/janur-kuning-wo" class="btn btn-primary tn-block gradient"> Daftar paket</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>