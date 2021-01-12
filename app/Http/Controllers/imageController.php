<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
	
	
	public function imageTagSave(Request $request){
		
		DB::table('image_tags')->where('image_id',$request->image)->delete();
		
		if(!empty($request->tags)){
	foreach($request->tags as $tag){
		
		DB::table('image_tags')->insert([
			'image_id' => $request->image,
			'tag' => $tag
		]);
	}
		}
		
		return redirect()->back();
	}
	
}
