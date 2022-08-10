<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('frontend/assets/vendor/simple-datatables/login.css') }}" rel="stylesheet">
    <title>Invoice</title>
</head>

<body>
    <section class="invoice mh-100">
        <div class="container">
            <div class="row mt-5 mt-header">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-7 text-center">
                                        <img src="{{url('storage'.'/'.$order->paket->wo->image)}}" class="rounded-1" width="195px" alt="">
                                        <hr>
                                        <p class="mb-0 text-uppercase"><b>{{$order->user->name}}</b></p>
                                        <p>{{$order->user->email}}</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="mb-0"><b>{{$order->paket->wo->nama_wo}}</b> </p>
                                        <p class="mb-0">Phone/WA : 0{{$order->paket->wo->no_hp}}</p>
                                        <p class="mb-0">Email : {{$order->paket->wo->email}}</p>
                                        <p>Intagram : {{$order->paket->wo->nama_ig}}</p>
                                        <hr class="mt-4">
                                        <p class="mb-0 text-center"><b>INVOICE</b></p>
                                        <p class="mb-0 text-center">{{date('d M Y',strtotime($tanggalnow))}}</p>
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
                                                            Upgrade
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="row justify-content-center"> Total
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="row justify-content-center">
                                                            {{$order->paket->nama_paket}}
                                                        </div>
                                                    </td>
                                                    @if ($order->upgrade)
                                                    <td>
                                                        <div class="row justify-content-center">
                                                            {{$order->upgrade}}
                                                        </div>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <div class="row justify-content-center">
                                                            -
                                                        </div>
                                                    </td>
                                                    @endif
                                                    <td>
                                                        <div class="row justify-content-center">
                                                            Rp.{{number_format($order->total,0)}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="">
                                        <p class="mb-0">Bank : BCA </p>
                                        <p class="mb-0">Kode Bank : 014 </p>
                                        <p class="mb-0">Nomer rekening : 0587992536</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0">Total Transfer : <b> Rp.{{number_format($order->total,0)}} </b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>