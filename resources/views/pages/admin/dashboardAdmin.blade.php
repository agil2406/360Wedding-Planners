@extends('layouts.appAdmin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="dashboard-admin">
    <div class="container">
        <div class="row mt-3">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Paket WO</h5>
                    <div class="col-md-12">
                        <table id="datatables" class="table table-striped table-hover table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="row justify-content-center">
                                            NO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center">
                                            Nama WO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center">
                                            Paket WO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center"> Aksi
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="galery mt-3">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-title">
                    <h5>Galery WO</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection