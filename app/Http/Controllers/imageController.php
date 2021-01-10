<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    //
	
	public function getBGImages() {
		
		$supported_image = array('gif','jpg','jpeg','png');
		$bgImages = [];
    $filesInFolder = \File::files('public/images/SiteBG');     
    foreach($filesInFolder as $path) { 
		
          $file = pathinfo($path);
		if (in_array($file['extension'], $supported_image)){
          array_push($bgImages, $file['basename']) ;
		}
     } 
		
		return $bgImages;
} 
	
}
