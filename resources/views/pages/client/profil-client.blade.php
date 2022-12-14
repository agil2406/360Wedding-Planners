@extends('layouts.app')

@section('title')
Profil saya
@endsection

@section('content')

<section class="profile">
  <div class="container">
    <div class="pagetitle mt-order">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item">Profil</li>
        </ol>
      </nav>
    </div>
    <section class="">
      <div class="d-flex justify-content-center ">

        @if(session()->has('message'))
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
          {{session('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
          </button>
        </div>
        @endif

        <div class="card card-galery w-75 mx-auto p-3 mb-4">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label my-2">Full Name</div>
                  <div class="col-lg-9 col-md-8 my-2">{{auth()->user()->name}}</div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label my-2">Job</div>
                  <div class="col-lg-9 col-md-8 my-2">{{auth()->user()->level}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label my-2">Email</div>
                  <div class="col-lg-9 col-md-8 my-2">{{auth()->user()->email}}</div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="/profileUpdate" method="post">
                  @method("put")
                  @csrf

                  <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input value="{{old('name', Auth::user()->name)}}" name="name" type="text" class="form-control @error('name') is-invalid  @enderror" id="name">
                      @error("name")
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="posisi" class="col-md-4 col-lg-3 col-form-label">Posisi</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="posisi" type="text" class="form-control " id="posisi" value="{{old('posisi', Auth::user()->level)}}" readonly>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="email" value="{{old('email', Auth::user()->email)}}">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>

                <!-- End Profile Edit Form -->

              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="/passwordUpdate" method="post">
                  @method("put")
                  @csrf

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="currentPassword" type="password" class="form-control @error('currentPassword') is-invalid  @enderror" id="currentPassword">
                      @error("currentPasword")
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>

                  </div>

                  <div class="row mb-3">
                    <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control @error('password') is-invalid  @enderror" id="password">
                    </div>
                    @error("password")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="row mb-3">
                    <label for="passwordConfirmation" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="passwordConfirmation" type="password" class="form-control @error('passwordConfirmation') is-invalid  @enderror" id="passwordConfirmation">
                    </div>
                    @error("passwordConfirmation")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>

                <!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>


      </div>
    </section>
  </div>
</section>

@endsection