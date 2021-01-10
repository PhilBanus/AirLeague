<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Admin;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use Storage;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
	
	
	public function UserIsAdmin(Request $request){
		return User::where('id',$request->ID)->first()->is_admin();
	}
	
	
	public function CreateAdmin(Request $request){
		User::where('id',$request->id)->update(['admin' => 1]);
		DB::table('admin_roles')->updateOrInsert(['user_id' => $request->id,'role' => $request->role],['role' => $request->role]);
		
		
	}
	public function removeAdmin(Request $request){
		if($request->id == 1){
			
		}else{
		DB::table('admin_roles')->where(['user_id' => $request->id,'role' => $request->role])->delete();
		}
	}
	public function killAdmin(Request $request){
		if($request->id == 1){
			
		}else{
				User::where('id',$request->id)->update(['admin' => 0]);
		}
	}
	
	
	public function getRoles(Request $request){
		return DB::table('admin_roles')->where('user_id',$request->ID)->pluck('role');
	}
	
	
	public function postImageUpload(Request $request){
		
		
		$path = $request->file('file')->storeAs('posts',$request->file('file')->getClientOriginalName());

		$json = "{ location : 'https://airleagueband.com/storage/app/$path'}";
        return response()
					->json(['location' => "/storage/app/$path"]);
		
		
	}
	
	public function editImage(Request $request){
		
		
		$path = $request->file('file')->storeAs($request->path,$request->name);

		$json = "{ location : 'https://airleagueband.com/storage/app/$path'}";
        return response()
					->json(['location' => "/storage/app/$path"]);
		
		
	}
	
	
	public function NewPostSave(Request $request){
		
		if (!strlen(trim($request->mytextarea))){
			session()->flash('error', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Post not saved:</strong>  Body of the post can not be empty.
  <button  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
			
			
			<div class="uk-alert-warning" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p></p>
</div>');
    return redirect()->back();
			exit();
		}
		
		preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $request->mytextarea, $image);

		print_r($image[0]);
		foreach($image[0] as $imaged){
			preg_match( '@src="([^"]+)"@' , $imaged, $match );
			$src = array_pop($match);
			
	
			
			DB::table('images')->insert([
				'user_id' => Auth::id(),
				'path' => $src
				]);
			
		}

		DB::table('posts')->insert([
		'user_id' => Auth::id(),
		'post' => $request->mytextarea,
		'Header' => $request->Header
		]);
		
		return redirect()->route('admins');
		}
	
	
	public function uploadImages(Request $request){
 	$path = $request->file('file')->storeAs('uploads',$request->file('file')->getClientOriginalName());
		
		$id = DB::table('images')->insertGetId([
				'user_id' => Auth::id(),
				'path' => '../storage/app/'.$path
				]);
		
		return 
			response()
            ->json(['path' => '../storage/app/'.$path, 'id' => $id])
			
			;
	}
	
	public function removeImg(Request $request){
		
		if(Storage::exists(str_replace('../storage/app/','',$request->path))){
		Storage::delete(str_replace('../storage/app/','',$request->path));
		}
		 DB::table('images')->where('id',$request->id)->delete();
		
		
		
		
		
	}
	
}
