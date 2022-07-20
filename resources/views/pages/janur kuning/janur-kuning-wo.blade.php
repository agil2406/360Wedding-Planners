@extends('layouts.app')

@section('title')
Wedding Organizer
@endsection

@section('content')
    <section class="Hero">
        <div class="row align-items-center">
            <div class="jumbotron4" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 paket mt-150 center">
                            <div class="display-4">
                                <p>Janur Kuning</p>
                                <p>Weeding Organizer</p>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-title">
                            <h4 class="center">Tentang Kami</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iste perspiciatis libero dolore, necessitatibus debitis temporibus asperiores maxime ab laboriosam ut culpa doloremque recusandae velit, veniam voluptate exercitationem. Delectus, veritatis.
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui delectus laboriosam vitae amet consectetur exercitationem vel. Inventore saepe praesentium natus! Cumque quaerat nostrum magni ab voluptate labore earum et quos!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio nostrum vero facere illum cum exercitationem animi neque quaerat, unde ipsa voluptate quibusdam nam sit ab maiores veritatis vitae officiis quas?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('frontend/assets/img/kiss.jpg')}}" class="card-img-top" alt="">
                    </div>
                    
                </div>
            </div>
        </div>

    </section>

    <section class="benjalur-paket">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                     <h4>Janur Kuning paket <br> wedding organizer</h4>
                </div>
            </div>
            <div class="row">
            <div class="slider">
                    <div class="owl-carousel">
                        <a href="/paket-akad" style="text-decoration: none; color:black;">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="" >
                            </div>
                            <div class="container">
                                <h5 class="mb-0"><b>Paket Resto Alfa</b></h5>
                                <p class="small">by Janur Kuning Wedding Organizer - Wedding Organizer</p>
                                <p><b>IDR 23.000.00</b></p>
                            </div>
                        </div>
                        </a>

                        <a href="/paket-akad" style="text-decoration: none; color:black;">
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{url('frontend/assets/img/prewed.jpg')}}" alt="">
                                </div>
                                <div class="container">
                                    <h5 class="mb-0"><b>Akad Package All in</b></h5>
                                    <p class="small">byJanur Kuning Wedding Organinizer - Wedding Organizer</p>
                                    <p><b>IDR 52.000.000</b></p>
                                </div>
                            </div>
                        </a>

                        <a href=""style="text-decoration: none; color:black;">
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{url('frontend/assets/img/party.jpg')}}" alt="">
                                </div>
                                <div class="container">
                                    <h5 class="mb-0 pl-2"><b>Wedding Organizer Resepsi</b></h5>
                                    <p class="small">by Curry Wedding Organizer - Wedding Organizer</p>
                                    <p><b>IDR 15.000.000</b></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us">
        <div class="container">
            <div class="" >
            <div class="row center">
                <div class="col-md-4 center">
                    <div class="card card-galery">
                        <div class="card-title">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="card-body ">
                            <h5>Contact Person</h5>
                            <p class="mb-0">Phone/WA : 0113223432</p>
                            <p class="mb-0">Email :Janur Kuning @gmail.com</p>
                            <p >Alamat : Jalan seroja no 9 praya Lombok tengah</p>
                            <h5>Sosial Media</h5>
                            <p class="mb-0">instagram : Janur Kuning-wedding-org</p>
                            <p>Facebok : Janur Kuning-wedding-org</p>
                            <button class="btn btn-primary tn-block gradient" type="submit">chat me</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                  <div class="card card-galery" >
                  <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>
                                Check Our Galery
                            </h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 mb-2">
                            <div class="card">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 mb-2">
                            <div class="card">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{url('frontend/assets/img/kiss.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    

<section class="map"  >
  <div class="container">
    <div class="row center">
      <div class="col-sm-12 text-center">
        <h4>Janur Kuning Wedding Organizer <br> Location </h4>
      </div>
      <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.7503560561413!2d116.28549691433695!3d-8.715239891252955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1c84161a98b%3A0x179d566383257d0f!2sSMAN%202%20Praya!5e0!3m2!1sen!2sid!4v1613572643648!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>

@endsection