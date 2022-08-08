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
                                        Rp.{{number_format($pesanan->total,0)}}
                                    </div>
                                </td>
                                @if ($pesanan->status == 0 )
                                <td>
                                    <div class="d-flex justify-content-center mt-2">
                                        <span class="badge bg-warning text-dark">Sedang Proses</span>
                                    </div>
                                </td>
                                @else
                                <td>
                                    <div class="d-flex justify-content-center mt-2">
                                        <span class="badge bg-success">Pembayaran Selesai</span>
                                    </div>
                                </td>
                                @endif
                                <td>
                                    <div class="row">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-2">


                                            </div>
                                            <div class="col-sm-2">

                                            </div>
                                            <div class="col-sm-2">

                                            </div>
                                        </div>
                                    </div>

                                </td>
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