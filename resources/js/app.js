
require('./bootstrap');

require('alpinejs');



$('img').on('click contextmenu', function(){
	if($(this).parent('a').length == 0){
 var path = $(this).attr('src');
	$.post('/api/LinkPath',{
		path:path, type:'link'
	})} 
})

$('a').on('click', function(){
 var path = $(this).attr('href');
	$.post('/api/LinkPath',{
		path:path, type:'link'
	}) })

$('a[download]').one('click', function(){
 var path = $(this).attr('href');
	$.post('/api/LinkPath',{
		path:path, type:'download'
	}) })

$('div[data-vimeo-id]').one('click', function(){
 var path = $(this).children('img').attr('src');
	$.post('/api/LinkPath',{
		path:path, type:'link'
	}) })