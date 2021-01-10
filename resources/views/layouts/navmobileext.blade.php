<style>
	.uk-nav-header{
		color: white !important;
	}
	.uk-nav-header:hover{
		color: aliceblue !important
	}
</style>









<div id="offcanvas-overlay" uk-offcanvas="container: #mainBody">
    <div class="uk-offcanvas-bar custom-scrollbar">

        <button class="uk-offcanvas-close"  uk-close></button>

		<img src="{{asset('images/LogoInverse@4x.png')}}" class="animate__animated animate__rotateIn uk-width-3-5 uk-width-1-1@s  uk-align-center  uk-margin-top uk-padding-remove uk-logo" alt="">

		
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
        <ul class="uk-nav uk-nav-default">
			
			@guest
			<a href="{{Route('login')}}" class="uk-link-reset uk-margin-bottom uk-width-1-2 uk-text-capitalize uk-text-bolder " style="color: white !important; cursor: pointer" >{{ __('nav.Login')}}</a>
<br>
<br>
			@endguest
			
			@if(\Request::route()->getName() != 'home')
			<li class="uk-nav-divider"></li>
            <li><a href="{{Route('home')}}">{{ __('nav.Home')}}</a></li>
			@endif
			
			<div hidden="">
            <li class="uk-nav-header uk-text-bolder" ><a href="#">{{ __('nav.About')}}</a></li>
            <li><a href="#">{{ __('nav.TheBand')}}</a></li>
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

			
            
			
			
			<button class="uk-button uk-button-secondary"  style="background: transparent " ><i class="fal fa-globe"></i> {{ Config::get('languages')[App::getLocale()] }}</button>
<div class=""  uk-dropdown="pos: top-center">
    <ul class="uk-nav uk-dropdown-nav">
		 @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
			<!--- STORE --->
			
			
        </ul>

    </div>
</div>
	

	
