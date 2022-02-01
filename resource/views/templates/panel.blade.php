<!DOCTYPE html>
<html lang="{{ config('app.lang') }}">
<head>
	<!-- Required meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset={{ config('app.charset') }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex" />

	<!-- jQuery CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.structure.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.theme.min.css') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/bootstrap/bootstrap.min.css') }}">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/plugins/Trumbowyg/ui/trumbowyg.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ public_path('assets/js/libs/plugins/lightbox/css/lightbox.min.css') }}"/>

	<!-- FontAwesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/brands.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/regular.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/solid.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/svg-with-js.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/css/v4-shims.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/panel/config.css') }}">

	<!-- Favicon -->
    <link rel="icon" href="{{ public_path('assets/img/logo.png') }}">

	<title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
	<section class="modal-load">
        <main>
            <div class="load"></div>
            <p><strong class="message">Aguarde, Carregando...</strong></p>
        </main>
    </section>

	<section class="content">
		@include('includes.panel.menu')
		<div>
			@include('includes.panel.header')

			<section class="content-main">
				<main class="content-breadcrumb">
					<nav aria-label="breadcrumb" class="p-3 border bg-white">
						<ol class="breadcrumb p-0 m-0">
							@php $routeComplete = '' @endphp
							@foreach(explode('/', route()) as $route)
								@php $routeComplete .= $route . '/' @endphp

								@if(!$loop->last)
						    	<li class="breadcrumb-item"><a href="{{ url($routeComplete) }}">{{ $route }}</a></li>
						    	@else
						    	@php $routeComplete = $route @endphp
						    	@endif
						    @endforeach
						    <li class="breadcrumb-item active" aria-current="page">{{ trim($routeComplete, '/') }}</li>
						</ol>
					</nav>
				</main>
				<main class="content-view">
					@yield('container')
				</main>
			</section>
		</div>
	</section>

	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/lightbox/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/jquery.maskedinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/bootstrap/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/Trumbowyg/trumbowyg.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/apexcharts.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/all.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/panel/main.js') }}"></script>
	@yield('scripts')
</body>
</html>