@extends('layouts.appAdmin')

@section('title')
Edit Wedding Organizer
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data WO</li>
            <li class="breadcrumb-item">Ubah Data WO</li>
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
                    <form action="{{url('/wo'.'/'.$data->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama_wo" class="col-form-label">Nama WO</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama_wo') is-invalid @enderror" id="nama_wo" name="nama_wo" value="{{ $data->nama_wo}}" required autofocus>
                                @error('nama_wo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="deskripsi" class="col-form-label">Deskripsi WO</label>
                                @error('deskripsi')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{$data->deskripsi}}">
                                <trix-editor input="deskripsi"></trix-editor>
                            </div>
                        </div>



                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="image" class="col-form-label">Foto WO </label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control @error ('image') is-invalid @enderror" id="image" name="image" value="{{ $data->image}}">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Simpan Data</button>
                        </div>

                    </form>
                </div>
            </div>
</section>

@endsection