

@extends('layouts.app')

@section('content')

<style>

.blocker { position:absolute; height:100%; width:100%; z-index:1;;  }
.linkwrap iframe { z-index: 2; }

</style>


<div class="uk-grid-small  uk-child-width-1-3@s uk-text-center uk-width-1-1 uk-margin-small uk-padding-small uk-padding-remove-right "  uk-grid="masonry: true">
   

	@foreach(DB::table('posts')->orderby('created_at','desc')->get() as $post)
	 <div>
   			 <div class="uk-card uk-card-default uk-height-medium uk-card-body uk-padding-remove" style="background: transparent">   			
				 <a href="post/{{$post->id}}" class="linkwrap">
					 <div class="blocker"></div>
					 <iframe class="frame uk-width-1-1 uk-height-1-1" src="https://airleagueband.com/Clearpost/{{$post->id}}" frameborder="0"  ></iframe> 
				 </a>
				
</div>
		   
		    </div>
	@endforeach
    

 

  </div>



@endsection
