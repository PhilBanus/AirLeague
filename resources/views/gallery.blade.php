

@extends('layouts.app')

@section('content')


<div class="lightgallery uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-padding uk-grid-column-small  uk-grid-row-small " uk-grid="masonry: true" >
	@foreach(DB::table('images')->orderby('created_at','desc')->get() as $image)
    <a href="{{$image->path}}">

		<img data-src="{{$image->path}}" src="{{$image->path}}" width="" height="" alt="" uk-img >
    </a>
	@endforeach
    
</div>

@endsection
