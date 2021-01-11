

@extends('layouts.app')

@section('content')

<style>

.blocker { position:absolute; height:100%; width:100%; z-index:1;;  }
.linkwrap iframe { z-index: 2; }
	.frame{
		zoom:0.4
	}
	.frame img{
		zoom:0.4; 
		
	}
	
	.frame *{
		word-wrap: break-word !important
	}

</style>


<div class="uk-grid-small  uk-child-width-1-3@s uk-text-center uk-width-1-1 uk-margin-small uk-padding-small uk-padding-remove-right "  uk-grid="masonry: true">
   

	@foreach(DB::table('posts')->orderby('created_at','desc')->get() as $post)
	 <div>
   			 <div class="uk-card uk-card-secondary  uk-height-max-medium  uk-overflow-hidden" style="background: rgba(33,33,33,0.8)">   			
				 <a href="post/{{$post->id}}" class="linkwrap uk-link-reset">
					    <div class="uk-width-expand uk-background-secondary uk-padding-small" >
                <h6 class="uk-card-title uk-margin-remove-bottom" style="font-size: 80% !important"> {{$post->Header ?? ''}}
				
				</h6>
                <small class="uk-text-meta uk-margin-remove-top" style="font-size: 70% !important">{{App\Models\User::where('id',$post->user_id)->first()->name}} - 	@if(App::currentLocale() == 'cn')
				{{\Carbon\Carbon::create($post->created_at)
				->locale('zh')
				->translatedFormat('l jS \\of F Y h:i A')}}
		@else
				{{\Carbon\Carbon::create($post->created_at)
				->translatedFormat('l jS \\of F Y h:i A')}}
		@endif</small>
            </div>
					 <div class="frame uk-card-body uk-padding-small uk-width-1-1  uk-overflow-hidden">
					
					 <p class=" uk-width-1-1 uk-height-1-1 uk-text-truncate uk-link-reset " style="color: white !important; text-decoration:  none !important">
					 {!! $post->post !!}
						 </p>
						 
						 </div>
					 <!--- iframe class="frame uk-width-1-1 uk-height-1-1" src="https://airleagueband.com/Clearpost/{{$post->id}}" frameborder="0"  ></iframe --> 
				 </a>
				
</div>
		   
		    </div>
	@endforeach
    

 

  </div>



@endsection
