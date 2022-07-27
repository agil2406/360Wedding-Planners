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
                <p>paket akad wedding organizer</p>
            </div>

            <div>
                <p>Jumlah</p>
                <p>Rp.5.000.000</p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p>Upgrade Paket ?</p>
            </div>
            <div>
            <a href="/upgrade" class="btn btn-primary tn-block gradient-custom-2 mb-4"> Upgrade</a>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p>SubTotal</p>
            </div>
            <div>
                <p>Rp.5000.000</p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between items-center">
            <div>
                <p>Total Pembayaran</p>
            </div>
            <div>
                <p><b>Rp.5000.000</b></p>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="/invoice" class="btn btn-primary tn-block gradient-custom-2 mb-4"> Lanjutkan Pembayaran</a>
        </div>

    </div>
</div>
 
@endsection