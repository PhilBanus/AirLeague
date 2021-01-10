
@extends('layouts.admin',['nav' => 'New Post'])



@section('content')

@php

$image = DB::table('images')->where('id',$id)->first()->path;
$string = str_replace('../storage/app/','',$image);
$path = substr($string,0,strpos($string, '/'));
$name = str_replace($path.'/','',$string);
@endphp

<script src="https://cdn.tiny.cloud/1/fpyseprjui1yhz3dgt8v8kql4dt9vvt1tl19p04idphcdjt4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<style>

	#mytextarea img{
		width: 50% !important
	}


</style>

  {!! Session::has('error') ? Session::get("error") : '' !!}


	 


    <div id="mytextarea" class="w-auto h-auto" name="mytextarea"><img src="../../{{$image}}" alt=""  /></div>
	 





 <script>
	 
var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

	 
    tinymce.init({
      selector: '#mytextarea',
		  inline: true,
		height: 500,
 plugins: [
    'imagetools noneditable'
  ],
  toolbar: '',

  
  toolbar_mode: 'sliding',
	menubar: '',
  contextmenu: 'imagetools',
 imagetools_toolbar: 'editimage',
	images_upload_url: "/admins/editImage?path={{$path}}&name={{$name}}",	
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