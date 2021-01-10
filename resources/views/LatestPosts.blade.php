@extends('layouts.app')

@section('content')
<?php

use Carbon\Carbon; 

$post = DB::table('posts')->where('id',$id)->first();
?> 

@mobile

<style>
	iframe{
		width: 100% !important;
		height: auto !important;
	}
	
	.uk-card-body  img{
		width: 100% !important;
		height: auto !important;
		display: block
	}
</style>

@endmobile

<div class="uk-card uk-panel-scrollable uk-padding-remove uk-card-primary uk-border-bottom-rounded uk-height-1-1 uk-width-1-1 custom-scrollbar "  style="background: rgba(0,0,0,0.80); height: 100% !important; border: none; resize: none !important">
 <div class="uk-card-header  uk-card-secondary uk-light uk-width-1-1">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <!--div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
            </div-->
			@mobile
		@if (strpos(url()->current(), 'post/') !== false) 
				<div  class="uk-width-1-6 uk-link-text uk-text-center uk-text-capitalize uk-text-bolder uk-padding-remove" style="color: white; cursor: pointer;"  uk-toggle="target: #offcanvas-overlay"><i class="fa fa-bars"></i></div>
			@endif
			@endmobile
			
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom"> {{$post->Header ?? ''}}
				
				</h3>
                <p class="uk-text-meta uk-margin-remove-top">{{App\Models\User::where('id',$post->user_id)->first()->name}} - 	@if(App::currentLocale() == 'cn')
				{{carbon::create($post->created_at)
				->locale('zh')
				->translatedFormat('l jS \\of F Y h:i A')}}
		@else
				{{carbon::create($post->created_at)
				->translatedFormat('l jS \\of F Y h:i A')}}
		@endif</p>
            </div>
        </div>
    </div>

        <div class="uk-card-body uk-width-1-1" style="width: 100% !important">


{!! $post->post !!}


</div>
</div>

@endsection
	