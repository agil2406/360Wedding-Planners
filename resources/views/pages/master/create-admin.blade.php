@extends('layouts.appAdmin')

@section('title')
Create Admin
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data Admin WO</li>
            <li class="breadcrumb-item">Tambah Data Admin WO</li>
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
                    <form action="{{url('/admin')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" class="col-form-label">Nama Admin</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" required autofocus>
                                @error('name')
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
                                <label for="wo_id" class="col-form-label">Nama WO </label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" aria-label="Default select example" name="wo_id">
                                    <option class="col-sm-2">Pilih WO</option>
                                    @foreach ($data as $d)
                                    @if(old('wo_id') == $d->id)
                                    <option value="{{$d->id}}" selected>{{$d->nama_wo}}</option>
                                    @else
                                    <option value="{{$d->id}}">{{$d->nama_wo}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <input type="text" value="Admin" name="level" hidden>
                        <input type="text" value="" name="email_verified_at" hidden>


                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>
</section>

@endsection