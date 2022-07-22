@extends('layouts.app')

@section('title')
invoice
@endsection

@section('content')
<section class="invoice">
    <div class="container">
        <div class="row mt-5 mt-header">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 mt-5">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-7">
                                <p>logo ayodiya</p>
                                <hr>
                                <p class="mb-0"><b>Nama Client</b></p>
                                <p>informasi/conctact</p>
                            </div>
                            <div class="col-md-5">
                                <p class="mb-0"><b>AYODIYA WEDDING ORGANIZER</b> </p>
                                <p class="mb-0">phone/WA: 087750607082</p>
                                <p>email: ayodiya@gmail.com</p>
                                <hr>
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="datatables" class="table table-striped table-hover table-bordered mt-2">
                                    <thead class=".gradient-custom-2">
                                        <tr>
                                            <th>
                                                <div class="row justify-content-center">
                                                    Details
                                                </div>
                                            </th>
                                            <th>
                                                <div class="row justify-content-center">
                                                    Price/unit
                                                </div>
                                            </th>
                                            <th>
                                                <div class="row justify-content-center"> subtotal
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-7">
                                <p class="mb-0">Bank            : </p>
                                <p class="mb-0">Kode Bank       :</p>
                                <p class="mb-0">Nomer rekening  :</p>
                                <p class="mb-0">Kode Refrensi   :</p>
                            </div>
                            <div class="col-md-5">
                               
                                <hr>
                            </div>     
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 mt-5">
                <button class="btn btn-primary tn-block gradient-custom-2 w-100" type="submit"> 
                    Cetak Invoice
                </button>
            </div>
        </div>
    </div>
</section>
@endsection