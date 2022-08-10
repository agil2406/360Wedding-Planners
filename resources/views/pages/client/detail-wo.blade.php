@extends('layouts.app')

@section('title')
Detail Wedding Organizer
@endsection

@section('content')
<section class="detail-vendor">

</section>

<section class="about-us mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title">
                        <h4 class="center">Tentang Kami</h4>
                    </div>
                    <div class="card-body">
                        {!!$wo->deskripsi!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('storage'.'/'.$wo->image)}}" class="card-img-top" alt="">
                </div>

            </div>
        </div>
        <?php
        $rating = $total / $jumlah;
        ?>
        @if ($rating)
        <div class="row">
            <div class="col-md-8">

                <div class="card-title">
                </div>
                <div class="card-body">
                    <div class="center">

                    </div>
                </div>

            </div>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-title">
                        <h4 class="center">Rating Kami</h4>
                    </div>
                    <div class="card-body">
                        <div class="center">
                            @for ($i = 0; $i < floor($rating) ; $i++) <i class="fa fa-star checked"></i>@endfor
                                <div>
                                    <p>
                                        <b style="font-size: 28px;">{{floor($rating)}} </b>/ 5
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title">
                        <h4 class="center">Rating Kami</h4>
                    </div>
                    <div class="card-body">
                        <div class="center">
                            <p class="center">Rating Kami Belum Ada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

</section>

<section class="benjalur-paket">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h4>{{$wo->nama_wo}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="slider">
                <div class="owl-carousel">
                    @foreach ($paket as $paket)
                    <a href="{{url('/detail-paket'.'/'.$paket->id)}}" style="text-decoration: none; color:black;">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{url('storage'.'/'.$paket->image)}}" alt="">
                            </div>
                            <div class="container">
                                <h5 class="mb-0"><b>{{$paket->nama_paket}}</b></h5>
                                <p class="small">by {{$paket->wo->nama_wo}}</p>
                                <p><b>IDR {{number_format($paket->harga,0)}}</b></p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="">
            <div class="row center">
                <div class="col-md-4 center">
                    <div class="card card-galery">
                        <div class="card-title">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="card-body ">
                            <h5>Contact Person</h5>
                            <p class="mb-0">Phone/WA : 0{{$wo->no_hp}}</p>
                            <p class="mb-0">Email : {{$wo->email}}</p>
                            <h5>Sosial Media</h5>
                            <p class="mb-2">instagram : {{$wo->nama_ig}}</p>
                            <?php
                            $Wa = 'https://api.whatsapp.com/send?phone=' . '0' . $paket->wo->no_hp;
                            ?>
                            <a href="{{$Wa}}"><button class="btn btn-primary tn-block gradient" type="submit">Contact Me</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-galery">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>
                                    Check Our Galery
                                </h4>
                            </div>
                        </div>
                        <div class="row p-2">
                            @foreach ($galery as $g)
                            <div class="col-md-6 mb-2">
                                <div class="card">
                                    <img src="{{url('storage'.'/'.$g->image)}}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="map">
    <div class="container">
        <div class="row center">
            <div class="col-sm-12 text-center">
                <h4>Benjalu Wedding Organizer <br> Location </h4>
            </div>
            <div class="embed-responsive embed-responsive-21by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.7503560561413!2d116.28549691433695!3d-8.715239891252955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1c84161a98b%3A0x179d566383257d0f!2sSMAN%202%20Praya!5e0!3m2!1sen!2sid!4v1613572643648!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section> -->

@endsection