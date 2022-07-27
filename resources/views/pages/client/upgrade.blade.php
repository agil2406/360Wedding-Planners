@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
   
<div class="container mt-order">
    <div class="title">
        <h3 class="text-center">Upgrade Paket</h3>
    </div>

    <div class="card card-galery w-75 mx-auto p-3 mb-4">
        <div class="">
            <div>
                <p>Detail Pesanan</p>
                <table id="datatables" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <div class="row justify-content-center">
                                        Nama Paket
                                    </div>
                                </th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="row justify-content-center">
                                        Nama Paket
                                    </div>
                                </td>
                            </tr>
                        

                          </tbody>
                            
                        </thead>
                        <thead>
                            <tr>
                                <th>
                                    <div class="row justify-content-center">
                                        lokasi paket
                                    </div>
                                </th>
                            </tr>
                        </thead>
                           
                       
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

        <div class="d-flex">
            <form action="">
            <label for="">Upgrade lokasi</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
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
 
@endsection