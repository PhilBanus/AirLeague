@extends('layouts.app')

@section('content')
<?php

use Carbon\Carbon; 

?> 

<style>
.gallery {
	width: 100%;
	overflow: hidden !important;
	max-height: 300px;
	height: 100% !important;
}


.gallery img {
  min-height: 100% !important;
  max-height: 400px !important;
  width: auto !important;
	min-width: 100% !important;
 max-width: 200% !important;
	padding: 5%
}


</style>

<div class="uk-slider-container-offset uk-light uk-position-bottom  uk-padding-small" uk-slider="center: true; autoplay: true; finite: false">
	    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
   <ul class="uk-slider-nav uk-light uk-dotnav uk-flex-center uk-margin"></ul>

    <ul class="uk-slider-items uk-grid uk-height-max-medium">
		
		@foreach(DB::table('posts')->orderby('created_at','desc')->take(2)->get() as $post)

        <?php
	// grab first image
			preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post, $image);
			

				
					if(!empty($image[1])){
			$first_img = $image[1][0];
						
					}else{
						$first_img = "";
					}
			?>
		
			<li class="uk-width-7-8 ">
	<a href="/post/{{$post->id}}" class="uk-link-reset">
        <div class=" uk-card uk-card-primary uk-border-rounded uk-padding-small uk-grid-collapse uk-child-width-1-2@s uk-margin uk-height-1-1 uk-width-1-1" style="background: rgba(0,0,0,0.40)" uk-grid>

						
				 @if(!empty($first_img) && \Storage::exists(str_replace(env('APP_URL').'/storage/app/','',$first_img)))
			@mobile
		
			@elsemobile
			<div class="uk-card-media-left uk-cover-container " >
        <img src="{{$first_img}}"  alt="" uk-cover>
  
    </div>
			@endmobile
			
   @endif
				
			<div>
        <div class="uk-card-body">
			<h3 class="uk-card-title"> {{$post->Header ?? ''}} <br><small>	@if(App::currentLocale() == 'cn')
				{{carbon::create($post->created_at)
				->locale('zh')
				->translatedFormat('l jS \\of F Y h:i A')}}
		@else
				{{carbon::create($post->created_at)
				->translatedFormat('l jS \\of F Y h:i A')}}
		@endif</small>
				
				</h3>
				 
			@mobile
			{!! myTruncate(str_replace('&nbsp;','<br>',strip_tags($post->post)),1) !!}
			@elsemobile
			{!! myTruncate(str_replace('&nbsp;','<br>',strip_tags($post->post)),100) !!}
			@endmobile
			
				</div>
			</div>
		
				
        </div>
		</a>
	</li>
	@endforeach
    
		
		@mobile
		<li class="uk-width-7-8">
		 <div class=" uk-card uk-card-primary uk-border-rounded uk-padding-remove uk-grid-collapse uk-child-width-1-2@s uk-margin uk-height-1-1 uk-width-1-1" style="background: rgba(0,0,0,0.40)" uk-grid>
<iframe class="latestVideoEmbed uk-width-1-1 uk-margin-remove" vnum='0' cid="UC3HUVgH4GNE-RahZz-gzE9A"  frameborder="0" allowfullscreen  uk-video="autoplay: false"></iframe>
			</div>
</li>
		<li class="uk-width-7-8" >
		 <div class=" uk-card uk-card-primary uk-border-rounded uk-padding-remove uk-grid-collapse uk-child-width-1-2@s uk-margin uk-height-1-1 uk-width-1-1" style="background: rgba(0,0,0,0.40)" uk-grid>
<iframe class="latestVideoEmbed uk-width-1-1 uk-margin-remove" vnum='1' cid="UC3HUVgH4GNE-RahZz-gzE9A" frameborder="0" allowfullscreen  uk-video="autoplay: false"></iframe>
			</div>
</li>
	
		
		
		@elsemobile
		<li class="uk-width-7-8">
		<div class="uk-height-1-1"  uk-grid>
<iframe class="latestVideoEmbed uk-width-1-3 uk-margin-remove" vnum='0' cid="UC3HUVgH4GNE-RahZz-gzE9A"  frameborder="0" allowfullscreen  uk-video="autoplay: false"></iframe>
<iframe class="latestVideoEmbed uk-width-1-3 uk-margin-remove" vnum='1' cid="UC3HUVgH4GNE-RahZz-gzE9A" frameborder="0" allowfullscreen  uk-video="autoplay: false"></iframe>
<iframe class="latestVideoEmbed uk-width-1-3 uk-margin-remove" vnum='2' cid="UC3HUVgH4GNE-RahZz-gzE9A" frameborder="0" allowfullscreen  uk-video="autoplay: false"></iframe>
			</div>
		
		</li>
   
	@endmobile

		@if(DB::table('images')->exists())
		<li class="uk-width-7-8" >
			@mobile
			
			<div class="uk-grid-small uk-flex uk-child-width-1-2@s uk-child-width-1-2 uk-child-height-1-2  uk-child-height-1-1@s	 uk-flex-center uk-text-center" uk-grid uk-lightbox="animation: slide">
			@foreach(DB::table('images')->orderby('created_at','desc')->take(2)->get() as $image)
    <div>
        <a class="uk-inline  uk-padding-remove-vertical" href="{{$image->path}}"  >
            <img src="{{$image->path}}" class="" alt="">
        </a>
    </div>
			@endforeach
	 <div>
   
    </div>
	
 
</div>
		     <a class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" href="gallery">
           View Gallery
        </a>	
			@elsemobile
			
		<div class="lightgallery uk-grid-small uk-flex uk-child-width-1-6@s uk-child-width-1-2 uk-child-height-1-1@s	 uk-flex-center uk-text-center" uk-grid  >
			@foreach(DB::table('images')->orderby('created_at','desc')->take(6)->get() as $image)
    <div class="" href="{{$image->path}}" >
        <a class="uk-inline uk-padding-remove-vertical gallery" href="{{$image->path}}"  src="{{$image->path}}" >
            <img src="{{$image->path}}" class="" alt="">
        </a>
    </div>
			@endforeach
	
	
 
</div>
			
			@endmobile
		
		</li>
		@endif
		
		
		
    </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

 

</div>


<script>
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=1");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}
</script>



<?php 

function myTruncate($string, $limit, $break="<br>", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}

?>

@endsection
