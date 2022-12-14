<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title> @yield('title') </title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/trix.css') }}">
	<script type="text/javascript" src="{{ url('frontend/assets/js/trix.js') }}"></script>

	<!-- Favicons -->
	@include('includes.styling')
	<link rel="stylesheet" href="{{url('frontend/assets/css/portal.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/css/style2.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/css/vendor.bundle.base.css')}}">
	<link href="{{ url('frontend/assets/vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">



</head>


<body class="app">
	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div>
						<!--//col-->
						<div class="app-utility-item app-user-dropdown dropdown col-auto">
							<p class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{auth()->user()->name}}</p>
							<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								@can('admin')
								<li><a class="dropdown-item" href="{{url('/profil')}}">Profil</a></li>
								@endcan

								<li>
									<form action="/logout" method="post">
										@csrf
										<button type="submit" class="dropdown-item">
											<i class="bi bi-box-arrow-right mr-2">Sign Out</i>
										</button>
									</form>
								</li>
							</ul>
						</div>
						<!--//app-user-dropdown-->
					</div>
					<!--//app-utilities-->
				</div>
				<!--//row-->
			</div>
			<!--//app-header-content-->
		</div>
		<!--//container-fluid-->
		</div>
		<!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="{{url('/dashboardAdmin')}}"><span class="logo-text">360 PLANNER</span></a>

				</div>
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">


						@can('admin')

						<li class="nav-item">
							<a class="nav-link " href="{{url('/galery')}}">
								<span class="nav-icon">
									<i class="fa-solid fa-camera"></i>
								</span>
								<span class="nav-link-text">Galery WO</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="{{url('/paketwo')}}">
								<span class="nav-icon">
									<i class="fa-solid fa-box-archive"></i>
								</span>
								<span class="nav-link-text">Paket WO</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="{{url('/profil-wo'.'/'.auth()->user()->wo_id)}}">
								<span class="nav-icon">
									<i class="fa-solid fa-person"></i>
								</span>
								<span class="nav-link-text">Tentang WO</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="/profileUpdate">
								<span class="nav-icon">
									<i class="fa-solid fa-person"></i>
								</span>
								<span class="nav-link-text">Profil</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="/pesanan">
								<span class="nav-icon">
									<i class="fa-solid fa-cart-shopping"></i>
								</span>
								<span class="nav-link-text">Pesanan</span>
							</a>
						</li>

						@endcan








						@can('superAdmin')
						<li class="nav-item">
							<a class="nav-link collapsed" data-bs-target="#master" data-bs-toggle="collapse" href="#master">
								<i class="nav-icon fa-solid fa-user-group"></i>
								<span class="nav-link-text">Master</span>
							</a>
							<ul id="master" class="nav-content collapse" data-bs-parent="#menu-accordion">
								<li class="nav-item">
									<a class="nav-link " href="{{url('wo')}}">
										<span class="nav-icon">
											<i class="fa-solid fa-people-group"></i>
										</span>
										<span class="nav-link-text">Data WO</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="{{url('admin')}}">
										<span class="nav-icon">
											<i class="fa-regular fa-address-book"></i>
										</span>
										<span class="nav-link-text">Data Admin WO</span>
									</a>
								</li>
							</ul>
						</li>
						@endcan
					</ul>
				</nav>
				<!--//app-nav-->
				<div class="app-sidepanel-footer">
					<nav class="app-nav app-nav-footer">

					</nav>
				</div>
				<!--//app-sidepanel-footer-->

			</div>
			<!--//sidepanel-inner-->
		</div>
		<!--//app-sidepanel-->
	</header>
	<!--//app-header-->



	<main id="main" class="main">
		<div class="app-wrapper">

			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">
					@yield('content')
				
				</div>

			</div>
			@include('includes.footer')
		</div>
	</main>


	<!--//app-content-->


	
	@include('includes.script2')


</body>

</html>