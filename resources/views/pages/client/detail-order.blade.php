@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')


<div class="container mt-order">
    <div class="title">
        <h3 class="text-center">Rangkuman Pembayaran</h3>
    </div>

    <div class="card card-galery w-75 mx-auto p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p>Detail Pesanan</p>
                <p>{{$paket->nama_paket}}</p>
                <p>Tanggal Acara {{date('d M Y',strtotime($tanggal))}}</p>
            </div>
            <div>
                <p>Jumlah</p>
                <p>Rp.{{number_format($paket->harga,0)}}</p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            {!!$paket->deskripsi!!}
        </div>
        <hr>
        <div class="d-flex justify-content-between items-center">
            <div>
                <p>Total Pembayaran</p>

            </div>
            <div>
                <p><b>Rp.{{number_format($paket->harga,0)}}</b></p>
            </div>
        </div>
        <form action="{{url('/save_order')}}" method="post">
            @csrf
            <input type="date" name="tgl_acara" value="{{$tanggal}}" hidden>
            <input type="int" name="paket_id" value="{{$paket->id}}" hidden>
            <input type="int" name="user_id" value="{{auth()->user()->id}}" hidden>
            <input type="int" name="total" value="{{$paket->harga}}" hidden>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary tn-block gradient-custom-2 mb-4" type="submit"> Lanjutkan Pembayaran</button>
            </div>
        </form>

    </div>
</div>
</section>

@endsection