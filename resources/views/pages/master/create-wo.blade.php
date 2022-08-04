@extends('layouts.appAdmin')

@section('title')
Create Wedding Organizer
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
                    <form action="{{url('/wo')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama_wo" class="col-form-label">Nama WO</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error ('nama_wo') is-invalid @enderror" id="nama_wo" name="nama_wo" value="{{ old('nama_wo')}}" required autofocus>
                                @error('nama_wo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2">
                                <label for="email" class="col-form-label">Email WO</label>
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="nama_ig" class="col-form-label">Ig WO</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control @error ('nama_ig') is-invalid @enderror" id="nama_ig" name="nama_ig" value="{{ old('nama_ig')}}">
                                @error('nama_ig')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2">
                                <label for="no_hp" class="col-form-label">No HP WO</label>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="number" class="form-control @error ('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp')}}" placeholder="875123654879">
                                    @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="deskripsi" class="col-form-label">Deskripsi WO</label>
                                @error('deskripsi')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-10">
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{old('deskripsi')}}">
                                <trix-editor input="deskripsi"></trix-editor>
                            </div>
                        </div>



                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="image" class="col-form-label">Foto WO </label>
                            </div>
                            <div class="col-md-10">
                                <input type="file" class="form-control @error ('image') is-invalid @enderror" id="image" name="image" value="{{ old('image')}}">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>
</section>

@endsection