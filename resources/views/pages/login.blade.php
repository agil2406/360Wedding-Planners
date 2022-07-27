<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('frontend/assets/css/app.css') }}" rel="stylesheet">
    @include('includes.styling')
    <title>Login</title>
  </head>
  <body class="jumbotron" >
  @include('includes.navbar')

<section class="login">
    <div class="container">
        <div class="row">
          <div class="row mt-5">
            <p class="welcome">Welcome!</p>
          </div>
          <div class="row"></div>
          <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <div class="card card-galery">
                    <div class="container">
                          @if(session()->has('succes'))
                          <div class="alert alert-succes alert-dismissible fade show" role="alert">
                            {{session('succes')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                            </button>
                          </div>
                          @endif

                          @if(session()->has('loginError'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('loginError')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                            </button>
                          </div>
                          @endif
                          <ul class="nav nav-tabs nav-tabs-bordered justify-content-center text-center mt-3 mb-3">

                            <li class="nav-item">
                              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"><h4>Sign in</h4></button>
                            </li>

                            <li class="nav-item">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"><h4> Sign UP</h4></button>
                            </li>


                          </ul>

                          <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <div class="row">
                                  <div class="col-md-6">
                                    <button class="btn btn-primary tn-block gradient-custom-2 w-100" type="submit"><i class="fa-brands fa-google"></i> Google</button>
                                  </div>
                                  <div class="col-md-6">
                                    <button class="btn btn-primary tn-block gradient w-100" type="submit"><i class="fa-brands fa-facebook-f"></i> Facebook</button>
                                  </div>
                              </div>
                              <div class="row mt-2">
                                  <div class="col-md-12">
                                      <form action="/login"  method="post">
                                      @csrf
                                        <label for="email" class="form-label @error('email') is-invalid @enderror">Masukkan Email</label>       
                                        <input type="email" name="email" class="form-control" id="email" required value="{{old('email')}}">
                                        @error('email')
                                          <div class="invalid-feedback">
                                            {{$message}}
                                          </div>
                                        @enderror
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                        <p class="small d-flex" style="left: 0;">lupa kata sandi ?</p>
                                        <button class="btn btn-primary tn-block gradient-custom-2" type="submit"> 
                                          Sign In
                                        </button>
                                        <p class="small">Gunakan akun lain</p>
                                      </form>
                                    </div>
                              </div>
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                              <form action="{{url('/register')}}" method="post">
                                  @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="name" class="col-form-label">Nama Admin</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" required autofocus>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-2">
                                            <label for="email" class="col-form-label">Email </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-2">
                                            <label for="password" class="col-form-label">Password </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password" value="{{ old('password')}}">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="text" value="client" name="level" hidden>
                                    <input type="text" value="" name="email_verified_at" hidden>


                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Sign UP</button>
                                    </div>

                              </form>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                            </div>

                          </div>


                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
