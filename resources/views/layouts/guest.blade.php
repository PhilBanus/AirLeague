<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
	
	
	<!-- Primary Meta Tags -->
<title>Air League Band Overseas Fan Group</title>
<meta name="title" content="Air League Band Overseas Fan Group">
<meta name="description" content="This is the overseas fan group page for the popular band from China - Air League Band ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Air League Band Overseas Fan Group">
<meta property="og:description" content="This is the overseas fan group page for the popular band from China - Air League Band ">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
	

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Air League Band Overseas Fan Group">
<meta property="twitter:description" content="This is the overseas fan group page for the popular band from China - Air League Band ">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
	

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('home.title')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	
	
    <!-- Styles -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
	
	.slideshow {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
		z-index: -1
}

.slideshow-image {
  position: absolute;
  width: 100%;
  height: 100%;
  
  -webkit-animation-name: kenburns;
          animation-name: kenburns;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-duration: 30s;
          animation-duration: 30s;
  opacity: 1;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.slideshow-image:nth-child(1) {
  -webkit-animation-name: kenburns-1;
          animation-name: kenburns-1;
  z-index: 4;
}
.slideshow-image:nth-child(2) {
  -webkit-animation-name: kenburns-2;
          animation-name: kenburns-2;
  z-index: 3;
}
.slideshow-image:nth-child(3) {
  -webkit-animation-name: kenburns-3;
          animation-name: kenburns-3;
  z-index: 2;
}
.slideshow-image:nth-child(4) {
  -webkit-animation-name: kenburns-4;
          animation-name: kenburns-4;
  z-index: 1;
}
.slideshow-image:nth-child(5) {
  -webkit-animation-name: kenburns-5;
          animation-name: kenburns-5;
  z-index: 0;
}

@-webkit-keyframes kenburns-1 {
  0% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  15% {
    opacity: 1;
  }
  19% {
    opacity: 1;
  }
  21% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  97% {
    opacity: 0;
    -webkit-transform: scale(1.2117647059);
            transform: scale(1.2117647059);
  }
  100% {
    opacity: 1;
  }
}

@keyframes kenburns-1 {
  0% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  15% {
    opacity: 1;
  }
  19% {
    opacity: 1;
  }
  21% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  97% {
    opacity: 0;
    -webkit-transform: scale(1.2117647059);
            transform: scale(1.2117647059);
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes kenburns-2 {
  19% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  21% {
    opacity: 1;
  }
  39% {
    opacity: 1;
  }
  41% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@keyframes kenburns-2 {
   19% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  21% {
    opacity: 1;
  }
  39% {
    opacity: 1;
  }
  41% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes kenburns-3 {
  39% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  41% {
    opacity: 1;
  }
  59% {
    opacity: 1;
  }
  61% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@keyframes kenburns-3 {
   39% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  41% {
    opacity: 1;
  }
  59% {
    opacity: 1;
  }
  61% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes kenburns-4 {
 59% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  61% {
    opacity: 1;
  }
  79% {
    opacity: 1;
  }
  81% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes kenburns-4 {
  59% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  61% {
    opacity: 1;
  }
  79% {
    opacity: 1;
  }
  81% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes kenburns-5 {
  79% {
    opacity: 1;
    -webkit-transform: scale(1.2);

            transform: scale(1.2);
  }
  81% {
    opacity: 1;
  }
  99% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes kenburns-5 {
 79% {
    opacity: 1;
    -webkit-transform: scale(1.2);

            transform: scale(1.2);
  }
  81% {
    opacity: 1;
  }
  99% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
	
	</style>
</head>
<body class="uk-overflow-hidden">
	
	<div class="slideshow">
		
		<div class="slideshow-image uk-cover-container">
		<img class=""
sizes="(max-width: 1400px) 100vw, 1400px"
srcset="
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_200.jpg 200w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_363.jpg 363w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_489.jpg 489w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_600.jpg 600w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_697.jpg 697w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_790.jpg 790w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_880.jpg 880w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_957.jpg 957w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1029.jpg 1029w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1110.jpg 1110w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1185.jpg 1185w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1257.jpg 1257w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1318.jpg 1318w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1386.jpg 1386w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1398.jpg 1398w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1400.jpg 1400w"
src="/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1400.jpg"
alt="" uk-cover>
</div>

		<div class="slideshow-image uk-cover-container">
		<img
sizes="(max-width: 1400px) 100vw, 1400px"
srcset="
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_200.jpg 200w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_464.jpg 464w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_650.jpg 650w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_820.jpg 820w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_948.jpg 948w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1062.jpg 1062w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1169.jpg 1169w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1271.jpg 1271w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1359.jpg 1359w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1400.jpg 1400w"
src="/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1400.jpg"
alt="" uk-cover>
		</div>
		
		<div class="slideshow-image uk-cover-container">
		<img
sizes="(max-width: 1400px) 100vw, 1400px"
srcset="
/images/BGOpt/kezhao3_oal6ec_c_scale,w_200.jpg 200w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_452.jpg 452w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_627.jpg 627w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_793.jpg 793w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_918.jpg 918w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1020.jpg 1020w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1121.jpg 1121w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1220.jpg 1220w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1306.jpg 1306w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1382.jpg 1382w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1400.jpg 1400w"
src="/images/BGOpt/kezhao3_oal6ec_c_scale,w_1400.jpg"
alt="" uk-cover>
		</div>
		
		<div class="slideshow-image uk-cover-container">
		<img
sizes="(max-width: 1400px) 100vw, 1400px"
srcset="
/images/BGOpt/runqili4_xdo3dx_c_scale,w_200.jpg 200w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_418.jpg 418w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_577.jpg 577w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_719.jpg 719w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_835.jpg 835w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_940.jpg 940w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1038.jpg 1038w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1121.jpg 1121w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1200.jpg 1200w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1281.jpg 1281w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1357.jpg 1357w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1382.jpg 1382w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1400.jpg 1400w"
src="/images/BGOpt/runqili4_xdo3dx_c_scale,w_1400.jpg"
alt="" uk-cover>
		</div>
		
		<div class="slideshow-image uk-cover-container">
		<img
sizes="(max-width: 1400px) 100vw, 1400px"
srcset="
/images/BGOpt/zhema5_cmxikz_c_scale,w_200.jpg 200w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_447.jpg 447w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_616.jpg 616w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_770.jpg 770w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_892.jpg 892w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_995.jpg 995w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1089.jpg 1089w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1179.jpg 1179w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1264.jpg 1264w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1338.jpg 1338w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1398.jpg 1398w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1400.jpg 1400w"
src="/images/BGOpt/zhema5_cmxikz_c_scale,w_1400.jpg"
alt="" uk-cover>
		</div>
		
	</div>
	

	
	<div class="uk-position-absolute uk-width-1-1 uk-height-1-1 uk-overflow-auto">
		
		
	
            @yield('content')
		</div>
 
	
<button class="uk-position-absolute uk-position-bottom-left uk-button uk-button-secondary"  style="background: transparent " type="button"><i class="fal fa-globe"></i> {{ Config::get('languages')[App::getLocale()] }}</button>
<div class=" uk-background-secondary uk-padding-remove-vertical" style="background: transparent " uk-dropdown>
    <ul class="uk-nav uk-dropdown-nav uk-background-secondary"  style="background: transparent ">
		 @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a class="uk-dark" style="color: black !important" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>


    </body>
</html>