@extends('layouts.app')

@section('title')
Paket Wedding Organizer
@endsection

@section('content')

<section class="order-client mt-order">
    <div class="container">
        <div class="order-title d-flex justify-content-center mb-3">
            <h4>Detail Pesanan</h4>
        </div>
        <table id="datatables" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>
                        <div class="d-flex justify-content-center">
                            NO
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-content-center">
                            NAMA PAKET
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-content-center">
                            TANGGAL ACARA
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-content-center">
                            UPGRADE ( CATATAN )
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-content-center">
                            TOTAL
                        </div>
                    </th>
                    <th>
                        <div class="d-flex justify-content-center">
                            STATUS PEMBAYARAN
                        </div>
                    </th>

                    <th>
                        <div class="d-flex justify-content-center">
                            AKSI
                        </div>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($order as $order)
                <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{$loop->iteration}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center ">
                            {{$order->paket->nama_paket}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{date('d M Y',strtotime($order->tgl_acara))}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{$order->upgrade}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            Rp.{{number_format($order->total,0)}}
                        </div>
                    </td>
                    @if ($order->status == 1 )
                    <td>
                        <div class="d-flex justify-content-center mt-2">
                            <span class="badge bg-warning text-dark">Sedang Proses</span>
                        </div>
                    </td>
                    @elseif($order->status == 2 )
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
                    @if($order->status != 1)
                    <td>
                        <div class="d-flex justify-content-center mt-1">
                            <div class="">
                                <div class="col-sm-5">
                                    <a class="btn btn-success text-white" href="{{url('rating').'/'.$order->paket->wo->id}}"><i class="bi bi-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </td>
                    @else
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="">
                                <a href="{{url('/detail-order'.'/'.$order->id)}}" class="btn btn-primary text-white">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="{{url('/upgrade').'/'.$order->id}}" class="btn btn-primary gradient-custom-2 text-white new-ml">
                                    <i class="bi bi-gear"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection