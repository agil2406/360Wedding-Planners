<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid px-5 mx-5">
    <a class="navbar-brand fs-4" href="/">360 WEDDING PLANNER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav margin">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/wedding')}}">Vendor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('/all-paket')}}">Store</a>
        </li>


        @auth
        <li class="nav-item">
          <a class="nav-link" href="#">Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('/profil-client')}}">Profil</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="{{url('/logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="bi bi-box-arrow-right mr-2">Sign Out</i>
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Sign in</a>
        </li>
        @endauth



      </ul>
    </div>
  </div>
</nav>