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
                              <form action="{{url('/register')}}" method="post">
                                  @csrf
                                  <div class="row">
                                    <div class="col-md-12">
                                     
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" required autofocus>
                                          @error('name')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                          @enderror
                                  
                          
                                      
                                        <label for="email" class="form-label">email </label>
                                        <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
                                        @error('email')
                                          <div class="invalid-feedback">
                                            {{$message}}
                                          </div>
                                        @enderror           
                                     
                                              
                                     
                                        <label for="new_password" class="form-label">password </label>
                                        <input type="new_password" class="form-control @error ('new_password') is-invalid @enderror" id="new_password" name="new_password" value="{{ old('new_password')}}">
                                          @error('new_password')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                          @enderror
                                      
                                     
                                          <label for="confirm_password" class="form-label">Konfirmasi Password </label>                                
                                          <input type="confirm_password" class="form-control @error ('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" value="{{ old('confirm_password')}}">
                                          @error('confirm_password')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                          @enderror    
                                      
                                  </div>
                                </div>          

                                  <input type="text" value="client" name="level" hidden>
                                  <input type="text" value="" name="email_verified_at" hidden>
                                  <div class="d-flex justify-content-center">
                                      <button class="btn btn-primary tn-block gradient-custom-2 center mt-2 mb-2 text-white" type="submit">Tambah Data</button>
                                  </div>

                              </form>
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
