@extends('layouts.appAdmin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Galery WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<section class="galery-wo-admin">
    <div class="container">
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Galery WO</h5>
                    <div class="col-md-12">
                        <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">
                            <a href="{{url('/galerytambah')}}" style="text-decoration: none; color:white;">Tambah Foto</a>
                        </button>
                    </div>
                    <div class="row">
                        @if($data->count() > 0)
                        @foreach ($data as $d)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{url('/galery'.'/'.$d->id)}}"><img src="{{url('storage'.'/'.$d->image)}}" class="card-img-top" alt=""> </a>
                                    <p class="text-center">
                                        {{$d->nama_foto}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-12 mb-3 flex">
                            <h5 class="text-center"> Foto Belum Tersedia </h5>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection