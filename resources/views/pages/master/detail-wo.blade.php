@extends('layouts.appAdmin')

@section('title')
Profil Wedding Organizer
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data WO</li>
            <li class="breadcrumb-item">Detail Data WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Profil</h5>
                <div class="row center">
                    <h4>{{$data->nama_wo}}</h4>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            {!!$data->deskripsi!!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('storage/'.$data->image)}}" class="card-img-top" alt="">
                    </div>
                </div>
                <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">
                    <a href="{{url('/wo')}}" style="text-decoration: none; color:white;">Kembali</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection