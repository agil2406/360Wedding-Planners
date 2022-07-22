@extends('layouts.appAdmin')

@section('title')
create admin
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data WO</li>
            <li class="breadcrumb-item">Tambah Data WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="dashboard-super-admin">
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
                    <h5 class="card-title">Tabel WO</h5>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama-admin" class="col-form-label">Nama Admin</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama-admin') is-invalid @enderror" id="nama-admin" name="nama-admin" value="{{ old('nama-admin')}}" required autofocus>
                                @error('nama-admin')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>                  
                      
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="email" class="col-form-label">Email </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="password" class="col-form-label">Password </label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password" value="{{ old('password')}}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="nama-wo" class="col-form-label">Nama WO </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama-wo') is-invalid @enderror" id="nama-wo" name="nama-wo" value="{{ old('nama-wo')}}">
                                @error('nama-wo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>
</section>

@endsection
