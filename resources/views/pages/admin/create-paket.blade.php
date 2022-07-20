@extends('layouts.appAdmin')

@section('title')
Tambah Paket
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/paketwo')}}">Paket WO</a></li>
            <li class="breadcrumb-item">Tambah Paket WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="tambah-data">
    <div class="container">
        <div class="card">
            <div class="container mt-2">
                <div class="card-title">
                    <h5>Tambah data Paket WO</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/paket')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="wo_id" class="col-form-label">Nama WO</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select @error('wo_id') is-invalid  @enderror" aria-label="Default select example" name="wo_id">
                                    <option class="">Pilih WO</option>
                                    @foreach ($wo as $m)
                                    @if(old('wo_id') == $m->id)
                                    <option value="{{$m->id}}" selected>{{$m->nama_wo}}</option>
                                    @else
                                    <option value="{{$m->id}}">{{$m->nama_wo}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="nama_paket" class="col-form-label">Nama Paket</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket" value="{{ old('nama_paket')}}" required autofocus>
                                @error('nama_paket')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-2">
                                <label for="harga" class="col-form-label">Harga</label>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" class="form-control @error ('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga')}}">
                                    @error('harga')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="kapasitas" class="col-form-label">Kapasitas</label>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <input type="number" class="form-control @error ('kapasitas') is-invalid @enderror" id="kapasitas" name="kapasitas" value="{{ old('kapasitas')}}">
                                    <span class="input-group-text">Pax</span>
                                    @error('kapasitas')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="lokasi" class="col-form-label">Lokasi <br> (Gedung) </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi')}}">
                                @error('lokasi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="cathering" class="col-form-label">Catering </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('catering') is-invalid @enderror" id="catering" name="catering" value="{{ old('catering')}}">
                                @error('catering')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label for="mua" class="col-form-label">MUA </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('mua') is-invalid @enderror" id="mua" name="mua" value="{{ old('mua')}}">
                                @error('mua')
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
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection