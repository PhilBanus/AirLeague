@extends('layouts.admin',['nav' => 'New Post'])



@section('content')

<script src="https://cdn.tiny.cloud/1/fpyseprjui1yhz3dgt8v8kql4dt9vvt1tl19p04idphcdjt4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  {!! Session::has('error') ? Session::get("error") : '' !!}

 <form method="post" action="NewPostSave" class="h-100">
	 @csrf

            <input class="form-control mb-1" type="text" placeholder="{{__('Header')}}" name="Header" required>

	 
    <textarea id="mytextarea" name="mytextarea"></textarea>
	 
	 <input type="submit"  class="btn btn-primary form-control mt-1" value="save">
	 
  </form>


 <script>
	 
var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

	 
    tinymce.init({
      selector: '#mytextarea',
		height: 500,
 plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste imagetools wordcount'
  ],
  toolbar: 'fullscreen | insertfile undo redo | styleselect | bold italic  | link image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
 
  toolbar_mode: 'sliding',
  contextmenu: 'link image imagetools table',

	images_upload_url: 'postImageUpload',	
		automatic_uploads: true,
		images_reuse_filename: true,
		 
		 skin: useDarkMode ? 'oxide-dark' : 'oxide',
  content_css: useDarkMode ? 'dark' : 'default',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
	allow_script_urls: true,	
		@if(App::currentLocale() == 'cn')
		language: 'zh_CN',
		@endif
		
		
		

    });
	 
	 
	 
  </script>

@endsection