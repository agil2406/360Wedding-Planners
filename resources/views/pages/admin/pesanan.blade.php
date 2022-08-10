@extends('layouts.appAdmin')

@section('title')
Paket Wedding Organizer
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Pesanan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section class="paket-wo-admin">

    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="container">

                    <h5 class="card-title text-bold">Pesanan </h5>

                    <table id="datatables" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <div class="row justify-content-center">
                                        NO
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        TANGGAL ACARA
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        NAMA PEMESAN
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        CATATAN (UPGRADE)
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        TOTAL
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        STATUS PEMBAYARAN
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        AKSI
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $pesanan )
                            <tr>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$loop->iteration}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        {{date('d M Y',strtotime($pesanan->tgl_acara))}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$pesanan->user->name}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$pesanan->paket->upgrade}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        Rp.{{number_format($pesanan->total,0)}}
                                    </div>
                                </td>
                                @if ($pesanan->status == 1 )
                                <td>
                                    <div class="d-flex justify-content-center mt-2">
                                        <span class="badge bg-warning text-dark">Sedang Proses</span>
                                    </div>
                                </td>
                                @elseif($pesanan->status == 2 )
                                <td>
                                    <div class="d-flex justify-content-center mt-2">
                                        <span class="badge bg-success">Pembayaran Selesai</span>
                                    </div>
                                </td>
                                @else
                                <td>
                                    <div class="d-flex justify-content-center mt-2">
                                        <span class="badge bg-danger">Pembayaran Gagal </span>
                                    </div>
                                </td>
                                @endif
                                @if($pesanan->status != 1)
                                <td>
                                    <div class="d-flex justify-content-center mt-1">
                                        <div class="col-sm-4">
                                            <p> - </p>
                                        </div>

                                    </div>

                                </td>
                                @else
                                <td>
                                    <div class="d-flex justify-content-center mt-1">
                                        <div class="col-sm-5">
                                            <a class="badge bg-success" href="{{url('rekap').'/'.$pesanan->id.'/setuju'}}"> Pembayaran Selesai </a>
                                        </div>
                                        <div class="col-sm-5">
                                            <a class="badge bg-danger" href="{{url('pesan').'/'.$pesanan->id}}"> Pembayaran Gagal </a>
                                        </div>
                                    </div>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection