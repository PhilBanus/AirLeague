

@extends('layouts.admin',['nav' => 'Previous Posts'])

@section('content')

<style>


.linkwrap {
	text-decoration: none;
	}
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

<div class="row" >
   

	@foreach(DB::table('posts')->orderby('created_at','desc')->get() as $post)
	  <div class=" col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mason " >
		    <div class="card overflow-hidden bg-dark" style="">   			
				 <div class="linkwrap">
					    <div class="card-header bg-secondary" >
                <h6 class="card-title text-white"> {{$post->Header ?? ''}}
				
				</h6>
                <small class="text-light" style="font-size: 70% !important">{{App\Models\User::where('id',$post->user_id)->first()->name}} - 	@if(App::currentLocale() == 'cn')
				{{\Carbon\Carbon::create($post->created_at)
				->locale('zh')
				->translatedFormat('l jS \\of F Y h:i A')}}
		@else
				{{\Carbon\Carbon::create($post->created_at)
				->translatedFormat('l jS \\of F Y h:i A')}}
		@endif</small>
            </div>
					 <div class="card-body frame text-light" style="max-height: 300px">
					
					 <p class=" text-light " style="color: white !important; text-decoration:  none !important">
					 {!! $post->post !!}
						 </p>
						 
						 </div>
					 <!--- iframe class="frame uk-width-1-1 uk-height-1-1" src="https://airleagueband.com/Clearpost/{{$post->id}}" frameborder="0"  ></iframe --> 
				 </div>
			
					<div class="card-footer d-flex justify-content-between">
						 <a href="/admins/editpost/{{$post->id}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
						 <div class="btn btn-danger" onClick="DeletePost({{$post->id}})"><i class="fa fa-trash"></i></div>
				</div>
</div>
		   
		    </div>
	@endforeach
    

 

  </div>

<script>
	function DeletePost(id){
		$.post('/admins/removePost',{id:id}).done(function(){
			location.reload();
		})
		
		
	}
</script>

@endsection
