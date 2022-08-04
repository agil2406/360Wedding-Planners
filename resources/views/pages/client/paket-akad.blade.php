@extends('layouts.app')

@section('title')
Paket Akad
@endsection

@section('content')

<section class="header mt-5">
    <div class="container">
        <div class="row">
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2 ml-2">
                            <img src="{{url('storage'.'/'.$paket->wo->image)}}" alt="" class="rounded-circle" width="100px" height="100px">
                        </div>
                        <div class="col-md-10 mt-3">
                            <h4>{{$paket->nama_paket}}</h4>
                            <p>by <span>{{$paket->wo->nama_wo}}</p>
                        </div>
                    </div>
                    <hr>
                    <section class="corousel">
                        <div class="row">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{url('storage'.'/'.$galery[0]->image)}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('storage'.'/'.$galery[1]->image)}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{url('storage'.'/'.$galery[2]->image)}}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </section>
                    <hr>

                    <section class="profil-vendor mt-4">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{url('storage'.'/'.$paket->wo->image)}}" alt="" class="rounded-circle" width="100px" height="100px">
                                        </div>
                                        <div class="col-md-9">
                                            <p class="mb-0"><b>{{$paket->wo->nama_wo}}</b></p>
                                            <p class="mb-0">Wedding Organizer - Lombok. ID</p>
                                            <p>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 align-items-center center mt-3">
                                    <a href="{{url('/detail-wo'.'/'.$paket->wo->id)}}" class="btn btn-primary tn-block gradient-custom-2">Kunjungi Profil Vendor</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>

                    <section class="payment">
                        <div class="container">
                            <div class="row">
                                <div class="h4">Deskripsi Paket</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {!!$paket->deskripsi!!}
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-md-4 pb-5">
                    <div class="card card-galery mt-5">
                        <div class="container">
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <div class="">
                                    <p class="p-1 mb-0"><b>Harga</b></p>
                                </div>

                            </div>
                            <div class="d-flex">

                                <p class="mb-0 mt-2 text-center text-dark pt-3"><i class="bi bi-gem text-dark"></i></p>
                                <div class="harga my-auto">
                                    <p class="mt-2 mb-0"><b>{{$paket->nama_paket}}</b></p>
                                    <p class=""><b>IDR {{number_format($paket->harga,0)}}</b></p>
                                </div>
                            </div>
                            <hr>
                            <p class="small mb-0">Kapasitas</p>
                            <p><b>{{number_format($paket->kapasitas,0)}} Pax</b></p>

                        </div>
                    </div>

                    <div class="card card-galery mt-2">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mt-3">Jumlah</p>
                                <form action="" class="w-25">
                                    <input type="number" class="form-control" name="jumlah" value="1" readonly>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3">
                        <div class="col-sm-6 mt-2">
                            <button class="btn btn-primary gradient-custom-2 w-100" data-bs-toggle="modal" data-bs-target="#basicModal" type="submit">Order Now</button>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <button class="btn  w-100" type="submit">
                                <?php
                                $Wa = 'https://api.whatsapp.com/send?phone=' . '0' . $paket->wo->no_hp;
                                ?>
                                <a href="{{$Wa}}" class="btn btn-outline-secondary w-100"><i class="fa-solid fa-comment-dots"></i> Chat Me</a></button>
                        </div>
                        @auth
                        <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="modal-header justify-content-center">
                                                    <h5 class="modal-title text-center">Pesan Sekarang</h5>
                                                </div>
                                                <div class="card card-galery mb-4">
                                                    <div class="card-body">
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-12">
                                                                <p class="mt-1 mb-0 text-center"><b>{{$paket->nama_paket}}</b></p>
                                                                <p class="small text-center"><b>Rp {{number_format($paket->harga,0)}}</b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start">
                                                    <p>
                                                        Sebelum melanjutkan ke proses pembayaran, mohon lengkapi tanggal layanan Anda terlebih dahulu.
                                                    </p>
                                                </div>
                                                <div class="mb-4">
                                                    <form action="{{url('/detail-order')}}" method="post">
                                                        @csrf
                                                        <label for="tanggal_acara" class="col-sm-4 col-form-label">Tanggal Acara</label>
                                                        <input type="date" class="form-control" name="tanggal_acara" value="{{ old('tanggal_acara')}}">
                                                        @error('tanggal_acara')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                        <input type="text" value="{{$paket->id}}" name="paket_id" hidden>
                                                        <div class="d-flex justify-content-center mt-2">
                                                            <button class="btn btn-primary tn-block gradient-custom-2 mb-4 text-center" type="submit"> Lanjutkan Pembayaran </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="container">
                                        <div class="card justify-content-center align-items-center p-4 mb-3">
                                            <h4>Silahkan Login terlebih dahulu</h4>
                                            <a href="/login" class="btn btn-primary gradient-custom-2 w-25 m-3">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="dashboard-paket mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <h3>Paket yang mungkin anda suka</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slider">
                    <div class=" lainnya owl-carousel">
                        @foreach ($allpaket as $p)
                        <a href="{{url('/paket-akad')}}" style="text-decoration: none; color:black;">
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{url('storage'.'/'.$p->image)}}" alt="">
                                </div>
                                <div class="container">
                                    <h5 class="mb-0"><b>{{$p->nama_paket}}</b></h5>
                                    <p class="small">by {{$p->wo->nama_wo}}</p>
                                    <p><b>IDR {{number_format($p->harga,0)}}</b></p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
    </div>
</section>

@endsection