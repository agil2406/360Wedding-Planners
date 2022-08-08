@extends('layouts.app')

@section('title')
invoice
@endsection

@section('content')
<section class="invoice mh-100">
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
                                    <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="rounded-1" width="195px" alt="">
                                    <hr>
                                    <p class="mb-0"><b>Nama Client</b></p>
                                    <p>informasi/conctact</p>
                                </div>
                                <div class="col-md-5">
                                    <p class="mb-0"><b>AYODIYA WEDDING ORGANIZER</b> </p>
                                    <p class="mb-0">phone/WA: 087750607082</p>
                                    <p class="mb-0">email: ayodiya@gmail.com</p>
                                    <p>Alamat : Jalan seroja no 9 praya Lombok tengah</p>
                                    <hr class="mt-4">
                                    <p class="mb-0"><b>INVOICE###</b></p>
                                    <p>25/05/2022</p>
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
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="">
                                    <p class="mb-0">Bank : </p>
                                    <p class="mb-0">Kode Bank :</p>
                                    <p class="mb-0">Nomer rekening :</p>
                                    <p class="mb-0">Kode Refrensi :</p>
                                </div>
                                <div class="">
                                    <p class="mb-0">Logo : </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <a href="{{url('/upgrade')}}"> <button class="btn btn-primary tn-block gradient-custom-2 w-100" type="submit">
                        Catatan ( Upgrade )
                    </button></a>
            </div>
        </div>
    </div>
</section>
@endsection