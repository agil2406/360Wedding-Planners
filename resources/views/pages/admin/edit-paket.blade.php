@extends('layouts.appAdmin')

@section('title')
Edit Paket
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/paketwo')}}">Paket WO</a></li>
            <li class="breadcrumb-item">Ubah Paket WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="tambah-data">
    <div class="container">
        <div class="card">
            <div class="container mt-2">
                <div class="card-title">
                    <h5>Ubah data Paket WO</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/paketupdate').'/'.$data->id}}" method="post">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nama_paket" class="col-form-label">Nama Paket</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error ('nama_paket') is-invalid @enderror" id="nama_paket" name="nama_paket" value="{{ $data->nama_paket}}">
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
                                    <input type="number" class="form-control @error ('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $data->harga}}">
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
                                    <input type="number" class="form-control @error ('kapasitas') is-invalid @enderror" id="kapasitas" name="kapasitas" value="{{ $data->kapasitas}}">
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
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ $data->lokasi}}">
                                @error('lokasi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="entertain" class="col-form-label">Entertain</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('entertain') is-invalid @enderror" id="entertain" name="entertain" value="{{ $data->entertain}}">
                                @error('entertain')
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
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('catering') is-invalid @enderror" id="catering" name="catering" value="{{ $data->catering}}">
                                @error('catering')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="dekorasi" class="col-form-label">Dekorasi </label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('dekorasi') is-invalid @enderror" id="dekorasi" name="dekorasi" value="{{ $data->dekorasi}}">
                                @error('dekorasi')
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
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('mua') is-invalid @enderror" id="mua" name="mua" value="{{$data->mua}}">
                                @error('mua')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="mc" class="col-form-label">MC </label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control @error ('mc') is-invalid @enderror" id="mc" name="mc" value="{{$data->mc}}">
                                @error('mc')
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
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{$data->deskripsi}}">
                                <trix-editor input="deskripsi"></trix-editor>
                            </div>
                        </div>
                        <div class="row">
                            <input type="text" value="{{$data->wo_id}}" name="wo_id" hidden>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Ubah Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection