@extends('layouts.appAdmin')

@section('title')
Profil Admin
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data Admin</li>
            <li class="breadcrumb-item">Detail Data Admin</li>
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
                    <form action="{{url('/admin')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" class="col-form-label">Nama Admin</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ $data->name}}" required autofocus readonly>
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
                                <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" value="{{ $data->email}}" readonly>
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
                                <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password" value="{{ $data->password}}" readonly>
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
                                    <option value="{{$data->wo_id}}" selected>{{$data->wo->nama_wo}}</option>
                                </select>
                            </div>
                        </div>

                        <input type="text" value="{{$data->level}}" name="level" hidden>
                        <input type="text" value="{{$data->email_verified_at}}" name="email_verified_at" hidden>


                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Kembali</button>
                        </div>

                    </form>
                </div>
            </div>
</section>

@endsection