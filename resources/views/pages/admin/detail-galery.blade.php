@extends('layouts.appAdmin')

@section('title')
Detail Galery
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Galery WO</li>
            <li class="breadcrumb-item">Detail Galery WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="detail-galery">
    <div class="container">
        <div class="card">
            <div class="container mt-2">
                <div class="card-title">
                    <h5>Detail Galery WO</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row center">
                            <h4>{{$data->nama_foto}}</h4>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{url('storage'.'/'.$data->image)}}" class="card-img-top" alt="{{$data->nama_foto}}">
                                </div>
                                <div class="col-md-8 content-center">
                                    <article>
                                        {!!$data->deskripsi!!}
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-primary tn-block gradient-custom-2 mt-2 mb-2 mx-auto">
                                        <a href="{{url('/galery')}}" style="text-decoration: none; color:white;">Kembali</a>
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <form action="{{url('/galery').'/'.$data->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-primary tn-block gradient-custom-2 mt-2 mb-2 text-white" type="submit" value="Delete" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection