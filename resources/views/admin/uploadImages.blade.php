

@extends('layouts.admin',['nav' => 'New Image'])

@section('content')
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/FA6/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/uikit.min.js') }}" defer></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}" defer></script>
	  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<div class="js-upload uk-placeholder uk-text-center">
    <span uk-icon="icon: cloud-upload"></span>
    <span class="uk-text-middle">Attach images by dropping them here or</span>
    <div uk-form-custom>
        <input type="file" multiple accept="image/*">
        <span class="uk-link">selecting one</span>
    </div>
</div>

<progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>



<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>


<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 719px;" id="gall">
   

	@foreach(DB::table('images')->orderby('created_at','desc')->take(10)->get() as $image)
	 <div class=" col-6 col-sm-4 col-md-3 col-lg-2 mb-4" style="position: absolute; left: 0%; top: 362px;">
		    <div class="card">
    <a href="/image/{{$image->id}}/edit" >

		<img class="bd-placeholder-img card-img" width="100%"  src="{{$image->path}}" width="" height="" alt="" uk-img >
    </a>
		 
		    </div>
		    </div>
	@endforeach
    

 

  </div>


<script>
	
	$(document).ready(function(){
		
		var $grid = $('#gall').masonry({
  percentPosition: true,
});

		$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
    var bar = document.getElementById('js-progressbar');

    UIkit.upload('.js-upload', {

        url: '/admins/uploadImages',
        multiple: true,
		mime : 'image/*',
		name: 'file',
		type: 'json',
        beforeSend: function () {
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function (result) {
            console.log('complete', arguments);
            console.log(arguments);
            console.log(arguments['0'].response);
       
			var elm = $("<div class='col-6 col-sm-4 col-md-3 col-lg-2 mb-4' style='position: absolute; left: 0%; top: 362px;'><div class='card'><a href='/image/"+ arguments['0'].response.id +"/edit' ><img class='bd-placeholder-img card-img' width='100%''  src='"+ arguments['0'].response.path +"' uk-img ></a> </div></div>");
			$grid.prepend(elm).masonry( 'prepended', elm);
			
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            
		$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
        }

    });
		})

</script>

@endsection
