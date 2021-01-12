

@extends('layouts.admin',['nav' => 'View Gallery'])

@section('content')


    <ul class="nav nav-pills">
		<li class="nav-item tag_all"  uk-filter-control=""><div class="nav-link active" href="#">ALL</div></li>
		@foreach(DB::table('image_tags')->select('tag')->groupby('tag')->orderby('tag','asc')->get() as $tag)
        <li class="nav-item" uk-filter-control=".tag-{{str_replace(' ', '', $tag->tag)}}"><div class="nav-link" href="#">{{$tag->tag}}</div></li>
		@endforeach
    </ul>

<div uk-filter="target: .lightgallery" class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 719px;" id="gall">
   



	@foreach(DB::table('images')->orderby('created_at','desc')->get() as $image)
	 <div class=" col-6 col-sm-4 col-md-3 col-lg-2 mb-4 mason tag
				  @foreach(DB::table('image_tags')->where('image_id',$image->id)->orderby('tag','asc')->get() as $tag)
			  tag-{{str_replace(' ', '', $tag->tag)}} 
			  @endforeach" style="position: absolute; left: 0%; top: 362px;">
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
	
	var searchArray = [];
	$('li[uk-filter-control]').on('click',function(){
		console.log('clicked')
		if(!$(this).attr('uk-filter-control')){
			$(this).siblings().children().removeClass('active');
			$(this).children().addClass('active');
			$('.tag').show();
			 $grid.masonry('layout');
			searchArray = [];
		}else{
			if($(this).children().hasClass('active')){
			searchArray.remove($(this).attr('uk-filter-control'))
			$(this).children().removeClass('active');	
				console.log(searchArray)
				
			}else{			
			searchArray.push($(this).attr('uk-filter-control'))
			$('.tag_all').children().removeClass('active');
			$(this).children().addClass('active');
			
				console.log(searchArray)
			}
			
			
			$('.tag').hide();
			if(searchArray.length > 0){
			$.each(searchArray, function(index, value){
			$(value).show()
		});}else{
				$('.tag').show();
			}
			 $grid.masonry('layout');
		}
	})
	
	
	Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
	
</script>


@endsection
