@extends('layouts.appAdmin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Profil WO</li>
            <li class="breadcrumb-item"> Ubah Profil WO</li>
        </ol>
    </nav>
</div><!-- End Page Title -->



<section class="edit-wo">
    <div class="container">
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ubah Data</h5>
                   <form action="">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="tentang" class="col-form-label">tentang kami </label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="inputText" name="mua" value="">
                            </div>

                        </div>
                        <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">
                        <a href="/wedding-org" style="text-decoration: none; color:white;" >simpan data</a>
                    </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection