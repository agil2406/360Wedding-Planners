@extends('layouts.appAdmin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboardAdmin')}}">Home</a></li>
            <li class="breadcrumb-item">Profil</li>
        </ol>
    </nav>
</div><!-- End Page Title -->    


    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profil</h5>
                        <div class="row center">
                            <h4>Tentang Kami</h4>
                        </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Totam doloremque quisquam rem facilis deleniti aspernatur 
                                        deserunt reprehenderit, facere dolorum atque necessitatibus accusantium. 
                                        itaque voluptate illo optio consequatur voluptas animi?
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt=""> 
                                </div>
                            </div>
                                <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2" type="submit">
                                    <a href="/wedding-org" style="text-decoration: none; color:white;" >Ubah data</a>
                                </button>
                </div>
            </div>
        </div>
        </div>
@endsection
