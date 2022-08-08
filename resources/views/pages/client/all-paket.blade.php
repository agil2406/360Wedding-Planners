@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')


<section class="all-paket">
    <div class="container mt-order justify-content-center">
        <div class="text-center">
            <h4>ALL PAKET</h4>
            <hr>
        </div>
        <div class="row">
            @foreach ($paket as $paket)
            <?php
            $a = rand(0, 3);
            ?>
            <div class="col-md-3 mb-3">
                <div class="card card-galery">
                    <a href="{{url('/detail-paket'.'/'.$paket->id)}}" style="text-decoration: none; color:black;">
                        <img src="{{url('storage'.'/'.$galery[rand(0, 3)]->image)}}" alt="..." class="w-100 rounded-3" height="150px">
                        <div class="card-body justify-content-center align-items-center">
                            <h5 class="card-title mb-0">{{$paket->nama_paket}}</h5>
                            <p class="card-text new-small">{{$paket->wo->nama_wo}}</p>
                            <p class="mb-1"><b>IDR {{number_format($paket->harga,0)}}</b></p>
                            <div class="d-flex">
                                <div class="px-3 py-1 new-paket rounded-pill text-white ">
                                    <p class=" mb-0">{{$paket->lokasi}}</p>
                                </div>
                                <div class="px-3 py-1 new-paket new-ml rounded-pill text-white ">
                                    <p class=" mb-0">{{$paket->MUA}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




@endsection