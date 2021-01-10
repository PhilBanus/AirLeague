<?php

use Carbon\Carbon; 

?> 

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background: transparent !important">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('home.title')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	
	
    <!-- Styles -->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>


	<link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/FA6/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/uikit.min.js') }}" defer></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}" defer></script>
	  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	
	
	
	<style>
	
		*{
			font-size: 2.5vw !important;
			
		}
		
		.uk-card-header *{
			font-size: 3vw !important;
			
		}
		
		img{
			width: 15% !important;
			display: inline-block
		}
	
	</style>
				
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

			
	<link href="{{ asset('public/lightGallery/src/css/lightgallery.css') }}" rel="stylesheet">
	<link href="{{ asset('public/masonry/css/masonry-docs.css') }}" rel="stylesheet">
	
    <script src="{{ asset('public/lightGallery/src/js/lightgallery.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-zoom.min.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-thumbnail.min.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-share.min.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-hash.min.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-video.min.js') }}" defer></script>
    <script src="{{ asset('public/lightGallery/modules/lg-fullscreen.min.js') }}" defer></script>

	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<script src="{{ asset('public/masonry/js/masonry-docs.min.js') }}"></script>

	
</head>
<body class="uk-overflow-hidden uk-padding-remove uk-height-1-1" style="background: transparent !important" >
	

	

	
	<div class="uk-position-absolute uk-width-1-1 uk-height-1-1 uk-overflow-hidden uk-offcanvas-content uk-margin-remove uk-padding-remove" uk-grid id="mainBody">
	
	
		<div class="uk-height-1-1 uk-width-1-1 uk-padding-remove uk-overflow-hidden uk-position-relative" style="background: rgba(225,225,225,0.1)">
		
		
            @yield('content')
		
		</div>
		</div>
			

			<script type="text/javascript">
    $(document).ready(function() {
        $(".lightgallery").lightGallery(); 

		

		
});
	
	
</script>
			


    </body>
</html>
