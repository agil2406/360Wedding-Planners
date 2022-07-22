@extends('layouts.appAdmin')

@section('title')
data master admin
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Data WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="dashboard-super-admin">
    <div class="container">
        <div class="row mt-3">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
           
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Admin WO</h5>
                    <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">
                        <a href="{{url('/create-admin')}}" style="text-decoration: none; color:white;">Tambah data</a>
                    </button>
                    <div class="col-md-12">
                        <table id="datatables" class="table table-striped table-hover table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="row justify-content-center">
                                            NO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center">
                                            Nama Admin
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center">
                                            Nama WO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="row justify-content-center"> Aksi
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection