require('./bootstrap');

require('alpinejs');




$.get('siteFunctions/getBackgroundImages', function(data){
	   var data = data;
	  var files = data.length-1;
		console.log(data);
	
	
	$.each( data, function( i, val ) {
		
		$('html').prepend('<div class="uk-cover-container uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1"><div class="uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1 uk-background-cover uk-animation-kenburns" data-src="images/SiteBG/'+val+'" uk-img id="Site-Background-'+i+'"></div></div>');
		
		
	});
		   
}
	
	
	/*
	
	  $('#Site-Background-1').attr('data-src', 'images/SiteBG/'+data[0])

		$('body').prepend('<div class="uk-cover-container uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1"><div class="uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1 uk-background-cover uk-animation-kenburns" data-src="images/SiteBG/'+data[0]+'" uk-img id="Site-Background-0"></div></div>')
	
	
	var i = 0;
		LoopBG(i, data, files)
		
  function LoopBG(i, data, files){
			setTimeout(function(){
				
				$('#Site-Background-'+i).fadeOut(5000);
				
				setTimeout(function(){
						$('#Site-Background-'+i).parent().remove();
				},5000)
			if(i == files){
					i = -1;
				}
		
				$('html').prepend('<div class="uk-cover-container uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1"><div class="uk-position-absolute uk-position-top uk-width-1-1 uk-height-1-1 uk-background-cover uk-animation-kenburns" data-src="images/SiteBG/'+data[i+1]+'" uk-img id="Site-Background-'+(i+1)+'"></div></div>')
						
				
				
				
					
				
				LoopBG(i+1, data, files)
				},10000);	
  }
		
		

			
		
	  $('#Site-Background-2').attr('data-src', 'images/SiteBG/'+data[1])

	  })
	  
	  */ 