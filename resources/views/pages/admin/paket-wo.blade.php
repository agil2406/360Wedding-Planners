@extends('layouts.appAdmin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Paket WO</li>
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

                    <h5 class="card-title text-bold">Paket WO </h5>
                    <a href="{{url('/paket')}}" class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-3 text-white">Tambah Data</a>

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
                                        NAMA PAKET
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        HARGA
                                    </div>
                                </th>
                                <th>
                                    <div class="row justify-content-center">
                                        KAPASITAS
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
                            @foreach ($data as $d )
                            <tr>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$loop->iteration}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$d->nama_paket}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        Rp.{{number_format($d->harga,0)}}
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        {{$d->kapasitas}} Pax
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-2">

                                                <a href="{{url('/paket').'/'.$d->id.'/edit'}}" class="btn btn-warning text-white">Ubah</a>

                                            </div>
                                            <div class="col-sm-2">

                                                <a href="{{url('/paket').'/'.$d->id}}" class="btn btn-success text-white">Detail</a>

                                            </div>
                                            <div class="col-sm-2">

                                                <form action="{{url('/paket').'/'.$d->id}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger text-white" type="submit" value="Delete" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</i></button>
                                                </form>

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