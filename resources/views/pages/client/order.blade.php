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
                                            ITEM
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-flex justify-content-center">
                                            NAMA WO
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-flex justify-content-center">
                                            TOTAL
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
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        1
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center ">
                                        <img src="{{url('frontend/assets/img/bg.jpg')}}" class="rounded-3"  alt="" width="100px" height="100px" >
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="my-auto">
                                        <p class="mb-0"> <b> NAMA WO </b></p>
                                        <p>nama paket</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                       10000
                                    </div>
                                </td>
                               
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="">
                                           <a href="/detail-paket" class="btn btn-primary text-white">
                                           <i class="bi bi-eye"></i>
                                           </a>
                                           
                                           <a href="/upgrade" class="btn btn-primary gradient-custom-2 text-white new-ml">
                                           <i class="bi bi-gear"></i>
                                           </a>
                                           <a href="" class="btn btn-danger text-white new-ml">
                                           <i class="bi bi-trash"></i>
                                           </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            
                            </tbody>
    </table>
    </div>
</section>

@endsection