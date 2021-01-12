<style>
	.uk-nav-header{
		color: white !important;
	}
	.uk-nav-header:hover{
		color: aliceblue !important
	}
</style>

	
	<img src="{{asset('images/LogoInverse@4x.png')}}" class="animate__animated animate__rotateIn uk-width-1-1 uk-width-4-5@m uk-width-4-5@l  uk-align-center  uk-margin-top uk-padding-remove uk-logo" alt="">

		
			@guest
			<a href="{{Route('login')}}" class="uk-link-reset uk-margin-bottom uk-width-1-2 uk-text-capitalize uk-text-bolder " style="color: white !important; cursor: pointer" >{{ __('nav.Login')}}</a>
<br>
<br>
@endguest
@auth

 <a class="uk-link-reset uk-margin-bottom uk-width-1-2 uk-text-capitalize uk-text-bolder " style="color: white !important; cursor: pointer" href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
<br>
<br>
			@endauth
			

<span  class="uk-link-text  uk-width-1-2 uk-text-capitalize uk-text-bolder" style="color: white; cursor: pointer"  uk-toggle="target: #offcanvas-overlay"><i class="fa fa-telescope"></i> {{ __('nav.Explore')}}</span>

<div id="offcanvas-overlay" uk-offcanvas="container: #mainBody">
    <div class="uk-offcanvas-bar custom-scrollbar">

        <button class="uk-offcanvas-close"  uk-close></button>

		  <ul class="uk-nav uk-nav-default " >
				@if(Auth()->user())
@if(Auth()->user()->is_admin())

		<li>
<a href="/admins" class=""><i class="fa fa-cogs"></i> {{__('nav.Admin')}}</a>
			</li>
			  <li class="uk-nav-divider"></li>
@endif
@endif
		</ul>

		
		More Coming Soon!
        <ul class="uk-nav uk-nav-default " >
			
			
	
			@if(\Request::route()->getName() != 'home')
			<li class="uk-nav-divider"></li>
            <li><a href="{{Route('home')}}">{{ __('nav.Home')}}</a></li>
			@endif
			
		
            <li class="uk-nav-header uk-text-bolder" ><a href="#">{{ __('nav.About')}}</a></li>
            <li><a href="/TheBand">{{ __('nav.TheBand')}}</a></li>
				<div hidden="">
            <li><a href="#">{{ __('nav.BandLogo')}}</a></li>
            <li><a href="#">{{ __('nav.Company')}}</a></li>
            <li><a href="#">{{ __('nav.OverseasFanGroup')}}</a></li>
			<li class="uk-nav-divider"></li>
			</div>
			
			
            <li class="uk-nav-header uk-text-bolder"><a href="#">{{ __('nav.News')}}</a></li>
			<li><a href="/posts">{{ __('nav.Newsletters')}}</a></li>
			<div hidden="">
            <li><a href="#">{{ __('nav.PressRelease')}}</a></li>
            <li><a href="#">{{ __('nav.Interviews')}}</a></li>
            <li><a href="#">{{ __('nav.Timeline')}}</a></li>
           <li class="uk-nav-divider"></li>
			</div>
			
				<div hidden="">
            <li class="uk-nav-header uk-text-bolder"><a href="#">{{ __('nav.Events')}}</a></li>
            <li><a href="#">{{ __('nav.Tours')}}</a></li>
            <li><a href="#">{{ __('nav.Performances')}}</a></li>
            <li><a href="#">{{ __('nav.BandSponsorEvents')}}</a></li>
            <li><a href="#">{{ __('nav.CharityEvents')}}</a></li>
			<li class="uk-nav-divider"></li>
			</div>
			
            <li class="uk-nav-header uk-text-bolder"><a href="#">{{ __('nav.Media')}}</a></li>
            <li><a href="{{Route('gallery')}}">{{ __('nav.PhotoGallary')}}</a></li>
				<div hidden="">
            <li><a href="#">{{ __('nav.VideoGallery')}}</a></li>
            <li class="uk-nav-divider"></li>

			
            <li class="uk-nav-header uk-text-bolder"><a href="#">{{ __('nav.ContactUs')}}</a></li>
			</div>
            
			<!--- STORE --->
			
			
        </ul>

    </div>
</div>
	
	
	<div class="uk-position-bottom uk-width-1-1" style="color: white">
	<div class="uk-flex uk-flex-middle uk-padding" uk-grid>
	<a href="https://instagram.com/air_league_band?igshid=12ax6f76100v7" class="uk-link-heading uk-width-1-1@s uk-width-1-2@m uk-width-1-3@l uk-width-1-4@xl" target="_blank"><img src="{{asset('images/insta.png')}}" class="uk-width-1-1" alt="" > </a>
	<a  class="uk-link-heading  uk-width-1-1@s uk-width-1-2@m uk-width-1-3@l uk-width-1-4@xl"  href="https://m.youtube.com/channel/UC3HUVgH4GNE-RahZz-gzE9A" target="_blank"><img src="{{asset('images/youtube.png')}}" class="uk-width-1-1" alt="" ></i></a>
	<a href="https://weibo.com/u/7497474611"  class="uk-link-heading  uk-width-1-1@s uk-width-1-2@m uk-width-1-3@l uk-width-1-4@xl"  target="_blank"><img src="{{asset('images/weibu.png')}}" class="uk-width-1-1" alt=""></i></a>
	<a href="https://space.bilibili.com/1013081967"  class="uk-link-heading  uk-width-1-1@s uk-width-1-2@m uk-width-1-3@l uk-width-1-4@xl  uk-align-center"  target="_blank"><img src="{{asset('images/bilibili.png')}}" class="uk-width-1-1 " alt=""></a>
		</div>
	
		<button class="uk-button uk-button-secondary"  style="background: transparent " ><i class="fal fa-globe"></i> {{ Config::get('languages')[App::getLocale()] }}</button>
<div class=""  uk-dropdown="pos: top-center">
    <ul class="uk-nav uk-dark uk-dropdown-nav">
		 @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a class="uk-dark" style="color: black !important" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
		
	</div>
	
