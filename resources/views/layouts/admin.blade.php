
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


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('home.title')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	 <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">

	<link href="{{ asset('public/FA6/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/volt/css/volt.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
	
	
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
	
	<style>
		
		body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
		
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://rawgit.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js"></script>

	
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>



</head>
	
	<body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/home">{{ __('home.title')}}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="w-100 d-flex">
		 <div class="dropdown me-1">
	<div class="btn text-white disabled ps-2">{{__('messages.hello')}}, {{Auth::user()->name}}</div>
		</div>
	 <div class="ms-auto d-flex text-right">
		 <div class="dropdown me-1">
		 <a class="btn  btn-secondary " href="/translations">
        {{ __('Translations') }}
    </a>
		 
		 </div>
		 
		 <div class="dropdown me-1">
		 <a class="btn  btn-secondary " href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
		 </div>
		
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fal fa-globe"></i> {{ Config::get('languages')[App::getLocale()] }}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	   @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item" > {{$language}}</a>
                </li>
            @endif
        @endforeach
  </ul>
</div>
	</div>
</div>


</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link 
					  @if($nav === "Home")
										  active
										  @endif
					  " aria-current="page" href="/admins">
              <i class="fal fa-home pe-2"></i>              {{__('AdminNav.Home')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link
					  @if($nav === "Users")
										  active
										  @endif
					  " href="/admins/Users">
              <i class="fal fa-users pe-2"></i>              {{__('AdminNav.Users')}}
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>{{__('AdminNav.Blog')}}</span>
         
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link
					  @if($nav === "New Post")
										  active
										  @endif
					  " href="/admins/NewPost">
              <i class="fal fa-pen-fancy pe-2"></i>
             {{__('AdminNav.New_Post')}}
            </a>
          </li>
          <li class="nav-item 
					  @if($nav === "Previous Posts")
										  active
										  @endif
					  ">
            <a class="nav-link" href="/admins/PreviousPosts">
              <i class="fal fa-history pe-2"></i>              {{__('AdminNav.Previous_Post')}}
            </a>
          </li>
          <li class="nav-item
					  @if($nav === "Post Settings")
										  active
										  @endif
					  ">
            <a class="nav-link" href="#">
              <i class="fal fa-cogs pe-2"></i>              {{__('AdminNav.Post_Settings')}}
            </a>
          </li>
        </ul>
		  
		  
		  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>{{__('AdminNav.Gallery')}}</span>
         
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item
					  @if($nav === "New Image")
										  active
										  @endif
					  ">
            <a class="nav-link" href="/admins/newImages">
              <i class="fal fa-camera pe-2"></i>
              {{__('AdminNav.New_Image')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link
					  @if($nav === "View Gallery")
										  active
										  @endif
					  " href="/admins/gallery">
              <i class="fal fa-images pe-2"></i>             {{__('AdminNav.View_Gallery')}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link
					  @if($nav === "Gallery Settings")
										  active
										  @endif
					  " href="#">
              <i class="fal fa-cogs pe-2"></i>             {{__('AdminNav.Gallery_Settings')}}
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
		 @yield('content')
    </main>
  </div>
</div>

  <script>
		
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
		
		</script>

		
		
		
	
</body>

</html>
