@extends('layouts.appAdmin')

@section('title')
Tambah Galery
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/galery')}}">Galery WO</a></li>
            <li class="breadcrumb-item">Tambah Foto WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="tambah-data">
    <div class="container">
        <div class="card">
            <div class="container mt-2">
                <div class="card-title">
                    <h5>Tambah Foto WO</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/galery')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="nama_foto" class="col-form-label">Nama Foto</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama_foto') is-invalid @enderror" id="nama_foto" name="nama_foto" value="{{ old('nama_foto')}}" required autofocus>
                                @error('nama_foto')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="deskripsi" class="col-form-label">Deskripsi </label>
                                @error('deskripsi')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{old('deskripsi')}}">
                                <trix-editor input="deskripsi"></trix-editor>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="image" class="col-sm-2 col-form-label">Foto </label>
                            <div class="col-sm-4">
                                <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image" name="image" accept="image/*">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <input id="wo_id" type="hidden" name="wo_id" value="{{auth()->user()->wo_id}}" hidden>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Tambah Foto</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection