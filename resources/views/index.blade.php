<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Ecommerce/home-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 12:32:11 GMT -->
<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gina Decorações</title>

	<!-- Meta OG -->
	<meta property="og:title" content="Premium Ecommerce Home Page Template">
	<meta property="og:description" content="Exclusive in its design, our premium ecommerce home page template agregates all your latest news and valuable informations.">
	<meta property="og:image" content="../../../../img/Live/MDB/ecommerce.jpg">
	<meta property="og:url" content="home-page.html">
	<meta property="og:site_name" content="mdbootstrap.com">
	<!-- /Meta OG -->

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Exclusive in its design, our premium ecommerce home page template agregates all your latest news and valuable informations." />
	<meta name="twitter:title" content="Premium Ecommerce Home Page Template" />
	<meta name="twitter:site" content="@MDBootstrap" />
	<meta name="twitter:image" content="../../../../img/Live/MDB/ecommerce.jpg" />
	<meta name="twitter:creator" content="@MDBootstrap" />
	<!-- /Twitter Card -->

	<!-- Font Awesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">

	<!-- Customizer -->
	<link rel="stylesheet" href="css/customizer.min.css">

</head>

<body class="hidden-sn pink-skin animated">

<header>

	<nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

		<!-- SideNav slide-out button -->
		<div class="float-left">
			<a href="/" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
		</div>

		<!-- Breadcrumb-->
		<div class="breadcrumb-dn mr-auto">
			<ol class="breadcrumb header-breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Quem Somos</a></li>
				<li class="breadcrumb-item"><a href="#">Serviços</a></li>
			</ol>
		</div>

		<ul class="nav navbar-nav nav-flex-icons ml-auto">

			<li class="nav-item ">
				<a class="nav-link" href="" data-toggle="modal"  data-target="#cart-modal-ex"><span class="badge red">{{ Session::has('carinho') ? Session::get('carinho')->quantidadeTotal : '' }}</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="hidden-sm-down">Carinho de Compras</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contacto</span></a>
			</li>

			@if (Auth::guest())
				<li class="nav-item">
					<a href="{{ url('/login') }}" class="nav-link"><span class="hidden-sm-down">Login</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ url('/register') }}" class="nav-link"><i class="fa fa-login"></i> <span class="hidden-sm-down">Criar Conta</span></a>
				</li>
			@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ url('/logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
			@endif
		</ul>

	</nav>
	<!-- /.Navbar -->

</header>

<!-- /.Double navigation -->

<!--Main layout-->
<main>
	<div class="container">

		<!--Section: Main carousel-->
		<section>

			<div class="row">

				<div class="col-md-12">

					<!-- Carousel Wrapper -->
					<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-2" data-slide-to="1"></li>
							<li data-target="#carousel-example-2" data-slide-to="2"></li>
						</ol>
						<!-- /.Indicators -->

						<!-- Slides -->
						<div class="carousel-inner" role="listbox">

							<!-- First slide -->
							<div class="carousel-item active">

								<!-- Mask color -->
								<div class="view hm-black-light">
									<img src="/img/slides/xm.png" class="img-fluid" alt="">
									<div class="full-bg-img">
									</div>
								</div>

								<!-- Caption -->
								<div class="carousel-caption">
									<div class="animated fadeIn">
										<h3 class="h3-responsive">New Fall</h3>
										<p>Take a look at our Trends and prepare for Fall Season</p>
									</div>
								</div>
								<!-- /.Caption -->

							</div>
							<!-- /.First slide -->

							<!-- Second slide -->
							<div class="carousel-item">

								<!-- Mask color -->
								<div class="view hm-black-light">
									<img src="/img/slides/xm.png" class="img-fluid img-responsive+" alt="">
									<div class="full-bg-img">
									</div>
								</div>

								<!-- Caption -->
								<div class="carousel-caption">
									<div class="animated fadeIn">
										<h3 class="h3-responsive">Best collection for summer</h3>
										<p>Choose your favourite one</p>
									</div>
								</div>
								<!--/.Caption-->

							</div>
							<!-- /.Second slide -->

							<!-- Third slide -->
							<div class="carousel-item">

								<!-- Mask color -->
								<div class="view hm-black-light">
									<img src="/img/slides/xm.png" class="img-fluid img-responsive" alt="">
									<div class="full-bg-img">
									</div>
								</div>

								<!-- Caption -->
								<div class="carousel-caption">
									<div class="animated fadeIn">
										<h3 class="h3-responsive">New arrivals for summer</h3>
										<p>Go for holidays with our shirts and sunglasses</p>
									</div>
								</div>
								<!-- Caption -->

							</div>
							<!-- /.Third slide -->

						</div>
						<!-- /.Slides -->

						<!--Controls-->
						<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->

					</div>
					<!-- /.Carousel Wrapper -->

				</div>

			</div>

		</section>
		<!-- /.Section: Main carousel -->

		<!-- Divider -->
		<div class="divider-new">
			<h2 class="h2-responsive">Faça já a Reserva do Seu Material</h2>
		</div>



		<!-- Section: Products v.1 -->
		<section class="section">
			<!-- First row -->
			<div class="row">

			@foreach ($material as $m)
				<!-- First column -->
				<div class="col-lg-4 col-md-12 mb-r">


					<!-- Card -->
					<div class="card text-center card-cascade narrower">


						<!-- Card image -->
						<div class="view overlay hm-white-slight">
							<img src="/img/{{$m->foto}}" class="img-fluid" alt="" width="300px" height="100px">
							<a>
								<div class="mask waves-light"></div>
							</a>
						</div>
						<!-- /.Card image -->

						<!-- Card content -->
						<div class="card-block">

							<!-- Category & Title -->
							<h4><strong>{{$m->tipo->designacao}}</strong></h4>
							<h5 class="card-title"><a href="#">{{$m->descricao}}</a></h5>

							<!-- Rating -->
							<ul class="rating">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>

							{{--<!-- Description -->--}}
							{{--<p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe voluptates.--}}
							{{--</p>--}}

							<!-- Card footer -->
							<div class="card-footer">
								<span class="left"><strong>{{$m->preco}} MT</strong></span>
								<span class="right">

                                        <a href="adicionar-ao-carinho/{{$m->id}}" data-toggle="tooltip" data-placement="top" title="Adicionar ao Carinho"><i class="fa fa-shopping-cart"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
                                        <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
								</span>
							</div>

						</div>
						<!-- /.Card content -->

					</div>
					<!-- /.Card -->

				</div>
				<!-- /.First column -->

			@endforeach

			</div>
			<!-- /First row -->

		</section>

		<hr class="between-sections">

		<!-- Section: Products v.5 -->
		<section class="section">

			<!-- Section heading -->
			<h1 class="section-heading">Alguns Produtos que lhe possam Interessar</h1>
			<!-- Carousel Wrapper -->
			<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

				<!-- Controls -->
				<div class="controls-top">
					<a class="btn-floating btn-small primary-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
					<a class="btn-floating btn-small primary-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
				</div>
				<!-- /.Controls -->

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
					<li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
					<li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
				</ol>
				<!-- /.Indicators -->

				<!-- Slides -->
				<div class="carousel-inner" role="listbox">

					<!-- First slide -->
					<div class="carousel-item active">

						<div class="col-lg-4 col-sm-6">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/dcp.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Copo</h5>
									<h4 class="card-title"><strong><a href="#">Copo para Agua</a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">50 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/ccp.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Copo</h5>
									<h4 class="card-title"><strong><a href="#">Copo para Cerveja</a></strong></h4>

									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">70 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/ecp.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Copo</h5>
									<h4 class="card-title"><strong><a href="#">Copo para Vinho</a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">50 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

					</div>
					<!-- /.First slide -->

					<!-- Second slide -->
					<div class="carousel-item">

						<div class="col-lg-4 col-sm-6">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/at.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Talhere</h5>
									<h4 class="card-title"><strong><a href="#">Garfos e Colheres </a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">30 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/ct.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Talhere</h5>
									<h4 class="card-title"><strong><a href="#">Colheres e Garfos</a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">25 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/bt.jpg" class="img-fluid" alt="" width="300px" height="100px">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Talheres</h5>
									<h4 class="card-title"><strong><a href="#">Garfos e Colheres</a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">25 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

					</div>
					<!-- /.Second slide -->

					<!-- Third slide -->
					<div class="carousel-item">

						<div class="col-lg-4 col-sm-6">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/dm.jpg" class="img-fluid" alt="">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Mesa</h5>
									<h4 class="card-title"><strong><a href="#">Mesa Redonda</a></strong></h4>

									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">290 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/fm.jpg" class="img-fluid" alt="">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Mesa</h5>
									<h4 class="card-title"><strong><a href="#">Mesa Rentangular</a></strong></h4>


									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">350 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

						<div class="col-lg-4 col-sm-6 hidden-sm-down">

							<!-- Card -->
							<div class="card card-cascade narrower">

								<!-- Card image -->
								<div class="view overlay hm-white-slight">
									<img src="img/bm.jpg" class="img-fluid" alt="">
									<a>
										<div class="mask waves-light"></div>
									</a>
								</div>
								<!-- /.Card image -->

								<!-- Card content -->
								<div class="card-block text-center">

									<!-- Category & Title -->
									<h5>Mesa</h5>
									<h4 class="card-title"><strong><a href="#">Mesa Redonda</a></strong></h4>

									<!-- Card footer -->
									<div class="card-footer">
										<span class="left">290 MT</span>
										<span class="right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </span>
									</div>

								</div>
								<!-- /.Card content -->

							</div>
							<!-- /.Card -->

						</div>

					</div>
					<!-- /.Third slide -->

				</div>
				<!-- /.Slides -->

			</div>
			<!-- /.Carousel Wrapper -->


		</section>
		<!-- /.Section: Products v.5 -->

	</div>

</main>
<!-- /.Main layout -->

<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" href="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<!-- Content -->
		<div class="modal-content">

			<!-- Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Seus Items</h4>
			</div>

			<!-- Body -->
			<div class="modal-body">

				<table class="table table-hover">
					<thead>
					<tr>
						<th>Titulo</th>
						<th>Qtd</th>
						<th>Preço</th>
						<th>Total</th>
						<th>Remover</th>
					</tr>
					</thead>

					<tbody>
					@if(Session::has('carinho'))

						@foreach($carinho->items as $m)
							<tr>
								<td>{{$m['item']->tipo->designacao}}</td>
								<td>{{$m['quantidade']}}</td>
								<td>{{$m['item']->preco}} MT</td>
								<td>{{$m['preco']}} MT</td>
								<td><a><i class="fa fa-remove"></i></a></td>
							</tr>

						@endforeach
					@endif
					</tbody>
				</table>
				<hr class="clearfix">
				@if (Auth::guest())
					<li>
						<a href="{{ url('/login') }}" class="clearfix btn btn-primary" >Conferir</a>
					</li>
				@else
					<li>
						<a href="{{ url('reservar') }}" class="clearfix btn btn-primary" >Reservar</a>
					</li>

					@endif

			</div>

			<!-- Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
		<!-- /.Content -->

	</div>

</div>
<!-- /.Cart Modal -->



<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
	// Data Picker Initialization
	$('.datepicker').pickadate();
</script>

<!-- Customizer -->
<script type="text/javascript" src="js/customizer.min.js"></script>

<script>
	// SideNav init
	$(".button-collapse").sideNav();
	var el = document.querySelector('.custom-scrollbar');
	Ps.initialize(el);
	var el = document.querySelector('.custom-scrollbar');
	Ps.initialize(el);

	new WOW().init();

	// Tooltips Initialization
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
		$('#toggle').tooltip('show')
	})
</script>

</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/templates/Ecommerce/home-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 12:36:26 GMT -->
</html>