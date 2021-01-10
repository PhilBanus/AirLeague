<div>
	@foreach(DB::table('posts')->orderby('created_at','desc')->take(2)->get() as $post)
        <div class="uk-card uk-card-primary uk-border-rounded uk-padding-small" style="background: rgba(0,0,0,0.40)">
         
			{!! strip_tags($post->post) !!}
			
        </div>
	@endforeach
    </div>
   