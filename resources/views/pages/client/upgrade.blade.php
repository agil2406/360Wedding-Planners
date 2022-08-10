@extends('layouts.app')

@section('title')
360 Wedding Planner
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
                                <td>
                                    {{$order->paket->nama_paket}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lokasi
                                </td>
                                <td>
                                    {{$order->paket->lokasi}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kapasitas
                                </td>
                                <td>
                                    {{$order->paket->kapasitas}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Make Up Artist
                                </td>
                                <td>
                                    {{$order->paket->mua}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Catering
                                </td>
                                <td>
                                    {{$order->paket->catering}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dekorasi
                                </td>
                                <td>
                                    {{$order->paket->dekorasi}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Entertain
                                </td>
                                <td>
                                    {{$order->paket->entertain}}
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <hr>
                <!-- Horizontal Form -->
                <form action="{{url('/upgrade').'/'.$order->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="row mb-3">
                        <label for="upgrade" class="col-sm-2 col-form-label">Catatan Tambahan <br>( Upgrade )</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('upgrade') is-invalid  @enderror" placeholder="Ingin Lokasi di Pindah " id="floatingTextarea" style="height: 100px;" name="upgrade"></textarea>
                            @error('upgrade')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary tn-block gradient-custom-2 mb-4">Upgrade Pesanan</button>
                        <a href="{{url('/order')}}" class="btn btn-secondary mb-4" type="reset">Batal</a>
                    </div>
                </form><!-- End Horizontal Form -->
            </div>
        </div>
    </div>
</section>

@endsection