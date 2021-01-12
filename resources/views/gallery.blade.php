

@extends('layouts.app')

@section('content')

<div uk-filter="target: .lightgallery">

    <ul class="uk-subnav uk-subnav-pill">
		<li class="uk-background-secondary" uk-filter-control=""><a href="#">ALL</a></li>
		@foreach(DB::table('image_tags')->select('tag')->groupby('tag')->orderby('tag','asc')->get() as $tag)
        <li class="uk-background-secondary" uk-filter-control=".tag-{{$tag->tag}}"><a href="#">{{$tag->tag}}</a></li>
		@endforeach
    </ul>

<div class="lightgallery uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-padding uk-grid-column-small  uk-grid-row-small " uk-grid="masonry: true" >
	@foreach(DB::table('images')->orderby('created_at','desc')->get() as $image)
    <a class="
			  @foreach(DB::table('image_tags')->where('image_id',$image->id)->orderby('tag','asc')->get() as $tag)
			  tag-{{$tag->tag}} 
			  @endforeach" href="{{$image->path}}">

		<img data-src="{{$image->path}}" src="{{$image->path}}" width="" height="" alt="" uk-img >
    </a>
	@endforeach
    
</div>
	
</div>

@endsection
