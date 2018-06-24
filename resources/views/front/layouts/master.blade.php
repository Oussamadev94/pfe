<!DOCTYPE html>
<html lang="en">

	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <meta name="description" content="">
		  <meta name="author" content="">

		  <title>موقع إعلانات مبوبة</title>

		  <!-- Bootstrap core CSS -->
		  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

		  <!-- Custom styles for this template -->
		  <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">		  
	</head>

	<body >
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg fixed-top " style="background-color:#f9f9f9">
			<div class="container">
			  <a class="navbar-brand" href="/">موقع إعلانات مبوبة</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav ml-auto">
					</ul>
			@guest
					<li class="nav-link">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					<li class="nav-link">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
					@else
					<li class="nav-link">
						<a href="/addPost" class="btn icon-btn btn-success">
						<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
						Nouvelle Annonce
						</a>
					</li>
					<li class="nav-link">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										 onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
											
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
									</form>
							</div>
					</li>
			@endguest
					
			  </div>
			</div>
		</nav>

	  <!-- Page Content -->
	   <div class="container" id="main_container">

		 <div class="row">
			  <div class="col-lg-3 text-right">			  
				  <h1 class="my-4"></h1>
				  <div class="list-group ">		

            @foreach($items as $item)	

								<a href="/category/{{$item->id}}" class="list-group-item">{{$item->category_name}}</a>

            @endforeach

				  </div>					  
			  </div>
			  <!-- /.col-lg-3 -->

			<div class="col-lg-9 text-right">
                
                @yield('content')
			
		    </div>
		    <!-- /.col-lg-9 -->

		</div>
		<!-- /.row -->

	  </div>
	  <!-- /.container -->

	  <!-- Footer -->
	  <footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
		</div>
		<!-- /.container -->
	  </footer>

	 <!-- Bootstrap core JavaScript -->
	 <script src="{{ asset('jquery/jquery.min.js') }}"></script>
	 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

	</body>

</html>
