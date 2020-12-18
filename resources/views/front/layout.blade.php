<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>{ Project Name }</title>

	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />

	<!-- Vendor Styles -->
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/bootstrap-4.3.1/dist/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/fontawesome-pro-5.7.2-web/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/animate.css-master/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/fancybox-master/dist/jquery.fancybox.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/slick-1.8.1/slick/slick.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/slick-1.8.1/slick/slick-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('themes/front/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.css') }}" />

	<!-- App Styles -->
	<link rel="stylesheet" href="{{ asset('themes/front/css/style.css') }}" />

	<!-- Vendor JS -->
	<script src="{{ asset('themes/front/vendor/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/parallax.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/WOW-master/dist/wow.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/slick-1.8.1/slick/slick.min.js') }}"></script>
	<script src="{{ asset('themes/front/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
{{--	<script src="themes/front/vendor/jquery.ui.touch-punch.min.js"></script>--}}


	<!-- App JS -->
	<script src="{{ asset('themes/front/js/functions.js') }}"></script>
</head>
<body>
	<div class="wrapper" data-parallax="scroll" data-z-index="-100" data-speed="0.2" data-image-src="css/images/bg-parallax.jpg">
		<header class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" data-wow-duration="1s" href="#">
{{--						<img src="css/images/logo.png" alt="">--}}
					</a>

					<button class="navbar-toggler ml-3 ml-sm-5 order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fal fa-bars"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
{{--							<li class="nav-item dropdown">--}}
{{--								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--									Продажби--}}
{{--								</a>--}}

{{--								<div class="dropdown-menu navbar-nav-dropdown" aria-labelledby="navbarDropdown">--}}
{{--									<a class="dropdown-item" href="#">Под наем</a>--}}
{{--								</div>--}}
{{--							</li>--}}

                             <li class="nav-item">
								<a class="nav-link" href="/properties">Продажби</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link" href="/properties">Наеми</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link" href="#">Нови сгради</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#">Блог</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#footer">Контакти</a>
							</li>
						</ul>
					</div>

					<ul class="nav-utilities ml-auto">
						<li>
							<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fal fa-search"></i>
							</button>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<form action="?" method="" class="form-search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Търсене..." aria-describedby="search-2">

										<div class="input-group-append">
											<button class="btn btn-outline-secondary" type="submit" id="search-2">
												<i class="fal fa-search"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

{{--						<li>--}}
{{--							<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--								<i class="fal fa-shopping-cart"></i>--}}
{{--							</button>--}}

{{--							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">--}}
{{--								<div class="dropdown-menu-card">--}}
{{--									<div class="row no-gutters">--}}
{{--										<div class="col-4">--}}
{{--											<a href="#">--}}
{{--												<img src="css/images/item2_05.jpg" alt="...">--}}
{{--											</a>--}}
{{--										</div>--}}

{{--										<div class="col-8">--}}
{{--											<div class="card-body py-0">--}}
{{--												<h5 class="card-title">--}}
{{--													<a href="#">Аспиратор</a>--}}
{{--												</h5>--}}

{{--												<p class="card-text">1250лв.</p>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="dropdown-menu-card">--}}
{{--									<div class="row no-gutters">--}}
{{--										<div class="col-4">--}}
{{--											<a href="#">--}}
{{--												<img src="css/images/item2_05.jpg" alt="...">--}}
{{--											</a>--}}
{{--										</div>--}}

{{--										<div class="col-8">--}}
{{--											<div class="card-body py-0">--}}
{{--												<h5 class="card-title">--}}
{{--													<a href="#">Аспиратор</a>--}}
{{--												</h5>--}}

{{--												<p class="card-text">1250лв.</p>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="dropdown-menu-card">--}}
{{--									<div class="row no-gutters">--}}
{{--										<div class="col-4">--}}
{{--											<a href="#">--}}
{{--												<img src="css/images/item2_05.jpg" alt="...">--}}
{{--											</a>--}}
{{--										</div>--}}

{{--										<div class="col-8">--}}
{{--											<div class="card-body py-0">--}}
{{--												<h5 class="card-title">--}}
{{--													<a href="#">Аспиратор</a>--}}
{{--												</h5>--}}

{{--												<p class="card-text">1250лв.</p>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="text-center">--}}
{{--									<a href="#" class="btn btn-secondary">View Cart</a>--}}

{{--									<a href="#" class="btn btn-secondary">Go to Checkout</a>--}}
{{--								</div><!-- /.card-bottom -->--}}
{{--							</div>--}}
{{--						</li>--}}
					</ul>
				</nav>
			</div><!-- /.container -->
		</header><!-- /.header -->

		<main class="main" data-parallax="scroll" data-z-index="-100" data-image-src="css/images/bg-2.png">
            @yield('content')
        </main>

        <footer class="footer" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-6 my-3 col-sm-2">
						<div class="footer-nav-title"><a href="#">Lorem</a></div><!-- /.footer-nav-title -->

						<ul class="footer-nav">
							<li class="footer-nav-item">
								<a href="#">Lorem ipsum</a>
							</li>

							<li class="footer-nav-item">
								<a href="#">Ipsum Lorem</a>
							</li>

							<li class="footer-nav-item">
								<a href="#">Lorem ipsum lorem</a>
							</li>
						</ul>
					</div><!-- /.col-md-6 -->

					<div class="col-6 my-3 col-sm-2">
						<div class="footer-nav-title"><a href="#">Help</a></div><!-- /.footer-nav-title -->

						<ul class="footer-nav">
							<li class="footer-nav-item">
								<a href="#">Lorem ipsum</a>
							</li>

							<li class="footer-nav-item">
								<a href="#">Lorem ipsum</a>
							</li>

                            <li class="footer-nav-item">
								<a href="#">Lorem ipsum</a>
							</li>
						</ul>
					</div><!-- /.col-md-6 -->

					<div class="col-6 my-3 col-sm-2">
						<div class="footer-nav-title"><a href="#">LOREM IPSUM</a></div><!-- /.footer-nav-title -->

						<div class="footer-nav-title"><a href="#">LOREM IPSUM</a></div><!-- /.footer-nav-title -->
					</div><!-- /.col-md-3 -->

					<div class="col-6 col-sm-4 my-3">
						<div class="footer-nav-title"><a href="#">Политика за защита на лични данни</a></div><!-- /.footer-nav-title -->

						<div class="footer-nav-title"><a href="#">Общи условия</a></div><!-- /.footer-nav-title -->

						<div class="footer-nav-title"><a href="#">Политика за използване на бисквитки</a></div><!-- /.footer-nav-title -->
					</div><!-- /.col-md-3 -->

					<div class="col-12 col-sm-2 my-3 text-md-right">
						<div class="row">
							<div class="col-6 col-sm-12">
								<div class="footer-nav-title">Телефон</div><!-- /.footer-nav-title -->

								<ul class="footer-nav">
									<li class="footer-nav-item">
										<a href="#">0089 123 456</a>
									</li>

									<li class="footer-nav-item">
										<a href="#">052 123 456</a>
									</li>
								</ul>
							</div><!-- /.col-6 -->

							<div class="col-6 col-sm-12">
								<div class="footer-nav-title">Адрес</div><!-- /.footer-nav-title -->

								<ul class="footer-nav">
									<li class="footer-nav-item">
										<a href="#">гр.Варна</a>
									</li>

									<li class="footer-nav-item">
										<a href="#">ул. Иван Иванов 2</a>
									</li>
								</ul>
							</div><!-- /.col-6 -->
						</div><!-- /.row -->
					</div><!-- /.col-md-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /.footer -->
	</div><!-- /.wrapper -->
</body>
</html>

