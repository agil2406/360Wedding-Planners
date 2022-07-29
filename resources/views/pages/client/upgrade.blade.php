@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
 
<section class="vendor">
    <div class="container ">
        <div class="row mt-5 mt-order">
            <div class="title mt-5 mb-3">
                <h3 class="text-center">Upgrade Paket</h3>
            </div>

            <div class="card card-galery w-75 mx-auto p-3 mb-4">
                <div class="">
                    <div>
                        <p>Detail Pesanan</p>
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <td>
                                    Nama Paket
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lokasi
                                </td>
                                <td>
                                    Narmada Convention Hall
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MUA
                                </td>
                                <td>
                                    agil
                                </td>
                            </tr>
                            
                        </table>
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

                <div class="card d-flex w-75 mx-auto p-5">
                    <form action="">
                        <label for="" class="mb-2">Upgrade lokasi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Lokasi Pilihan anda</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="" class="mb-2 mt-3">Upgrade MUA</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih MUA Pilihan anda</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </form>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <a href="/invoice" class="btn btn-primary tn-block gradient-custom-2 mb-4"> Upgrade</a>
                </div>

            </div>
        </div>
    </div>
</section>
 
@endsection