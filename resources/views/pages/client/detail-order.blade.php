@extends('layouts.app')

@section('title')
360 Wedding Planner
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
                <p>{{$order->paket->nama_paket}}</p>
                <p>Tanggal Acara {{date('d M Y',strtotime($order->tgl_acara))}}
                </p>
            </div>
            <div>
                <p>Jumlah</p>
                <p>Rp.{{number_format($order->paket->harga,0)}}</p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            {!!$order->paket->deskripsi!!}
        </div>
        <hr>
        <div class="d-flex justify-content-between items-center">
            <div>
                <p>Total Pembayaran</p>

            </div>
            <div>
                <p><b>Rp.{{number_format($order->paket->harga,0)}}</b></p>
            </div>
            <div>
                <button class="btn btn-dark tn-block center mt-2 mb-2">
                    <a href="{{url('/order')}}" style="text-decoration: none; color:white;">Kembali</a>
                </button>
                <button class="btn btn-success tn-block center mt-2 mb-2">
                    <a href="{{url('/invoice').'/'.$order->id}}" style="text-decoration: none; color:white;" target="_blank">Cetak Inovice</a>
                </button>
            </div>
        </div>
    </div>
</div>
</section>

@endsection