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
                           
                            <tr>
                                <td>
                                    <div class="row justify-content-center">
                                       
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                      
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                       
                                    </div>
                                </td>
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
                        

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection