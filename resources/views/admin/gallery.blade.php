

@extends('layouts.admin',['nav' => 'View Gallery'])

@section('content')

<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 719px;" id="gall">
   

	@foreach(DB::table('images')->orderby('created_at','desc')->get() as $image)
	 <div class=" col-6 col-sm-4 col-md-3 col-lg-2 mb-4 mason" style="position: absolute; left: 0%; top: 362px;">
		    <div class="card">
    <a href="/image/{{$image->id}}/edit" >

		<img class="bd-placeholder-img card-img" width="100%"  src="{{$image->path}}" width="" height="" alt="" >
    </a>
				@if (strpos($image->path, 'posts') === false) 
		 <div class="btn btn-danger position-absolute" onClick="DeleteImg({{$image->id}},'{{$image->path}}',$(this))"><i class="fa fa-trash"></i></div>
				@endif
		    </div>
		    </div>
	@endforeach
    

 

  </div>

<script>
	var $grid
	$(document).ready(function(){
		
	$grid = $('#gall').masonry({
  percentPosition: true,
});

		$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});

		

			});
	
	
	function DeleteImg(id,path,item){
		$.post('/admins/removeImg',{id:id,path:path}).done(function(){
			$grid.masonry('remove', item.parents('.mason')).masonry('layout')
		})
		
		
	}
	
	
</script>


@endsection
