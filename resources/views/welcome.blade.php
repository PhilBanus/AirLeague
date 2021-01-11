@extends('layouts.guest')
@section('content')
        <div class="uk-width-1-1 uk-height-1-1">
 
       

           <div class="uk-card uk-card-secondary uk-height-1-1 uk-width-2-5@s uk-width-1-4@m uk-align-left mobile-friend" style="background: rgba(0,0,0,0.6)">
       			<div class="uk-card-media-top">
                <a href="/home"><img src="{{asset('images/LogoInverse@4x.png')}}" class="animate__animated animate__rotateIn uk-width-2-5 uk-width-1-1@s  uk-align-center  uk-margin-top uk-padding-remove uk-logo" alt=""></a>
           		</div>
			   @mobile
			   <div class="uk-card-body uk-text-center uk-text-large uk-text-bold uk-position-fixed uk-position-bottom  uk-width-1-1">
				   @elsemobile
				  <div class="uk-card-body uk-text-center uk-text-large uk-text-bold "> 
				   @endmobile
				   <div class="uk-card-title uk-text-large uk-text-primary">{{ __('home.title')}}</div>
				   <br>
				   <div class="uk-card-title uk-text-large uk-text-primary">{{ __('home.commingsoon')}} </div>
				  @guest
				   <a href="{{ route('register') }}"><button class="uk-button uk-button-danger">{{ __('nav.Register')}} </button></a>
				   <a href="{{Route('login')}}" class="uk-button uk-button-danger" >{{ __('nav.Login')}}</a>
				   @else
				   <div class="uk-card-title uk-text-large uk-text-default">{{ __('messages.thanksforregistering')}} </div>
			   	   @endguest
			   	
			   </div>
		
  </div>
   
		
</div>
@endsection


