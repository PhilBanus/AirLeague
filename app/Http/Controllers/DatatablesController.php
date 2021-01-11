<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Admin;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use Storage;
use URL;

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
					->json(['location' => env('APP_URL')."/storage/app/$path"]);
		
		
	}
	
	public function editImage(Request $request){
		
		
		$path = $request->file('file')->storeAs($request->path,$request->name);

		$json = "{ location : 'https://airleagueband.com/storage/app/$path'}";
        return response()
					->json(['location' => env('APP_URL')."/storage/app/$path"]);
		
		
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

		$post = DB::table('posts')->insertGetId([
		'user_id' => Auth::id(),
		'post' => $request->mytextarea,
		'Header' => $request->Header
		]);
		
		foreach($image[0] as $imaged){
			preg_match( '@src="([^"]+)"@' , $imaged, $match );
			$src = array_pop($match);
			
	
			
			DB::table('images')->insert([
				'user_id' => Auth::id(),
				'path' => $src,
				'Post_ID' => $post
				]);
			
		}
		
		return redirect()->route('admins');
		}
	public function EditPostSave(Request $request){
		
		if (!strlen(trim($request->mytextarea))){
			session()->flash('error', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Post not saved:</strong>  Body of the post can not be empty.
  <button  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
			
			
			<div class="uk-alert-warning" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p></p>
</div>');
    	
		return redirect()->route('AdminPreviousPosts');
			exit();
		}
		
		preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $request->mytextarea, $image);
		
		DB::table('images')->where('Post_ID',$request->Post_ID)->delete();
		
		DB::table('posts')->where('id',$request->Post_ID)->update([
		
		'post' => $request->mytextarea,
		'Header' => $request->Header
		]);
		
		foreach($image[0] as $imaged){
			preg_match( '@src="([^"]+)"@' , $imaged, $match );
			$src = array_pop($match);
			
	
			
			DB::table('images')->insert([
				'user_id' => Auth::id(),
				'path' => $src,
				'Post_ID' => $request->Post_ID
				]);
			
		}
		
		return redirect()->route('AdminPreviousPosts');
		}
	
	
	public function uploadImages(Request $request){
 	$path = $request->file('file')->storeAs('uploads',$request->file('file')->getClientOriginalName());
		
		$id = DB::table('images')->insertGetId([
				'user_id' => Auth::id(),
				'path' => env('APP_URL').'/storage/app/'.$path
				]);
		
		return 
			response()
            ->json(['path' => env('APP_URL').'/storage/app/'.$path, 'id' => $id])
			
			;
	}
	
	public function removeImg(Request $request){
		
		if(Storage::exists(str_replace(env('APP_URL').'/storage/app/','',$request->path))){
		Storage::delete(str_replace(env('APP_URL').'/storage/app/','',$request->path));
		}
		 DB::table('images')->where('id',$request->id)->delete();
		
		
		
		
		
	}
	
	
	public function removePost(Request $request){
		
		DB::table('posts')->where('id',$request->id)->delete();
		
		foreach(DB::table('images')->where('Post_ID',$request->id)->get() as $image){
		
		if(Storage::exists(str_replace(env('APP_URL').'/storage/app/','',$image->path))){
		Storage::delete(str_replace(env('APP_URL').'/storage/app/','',$image->path));
		}
		 DB::table('images')->where('id',$image->id)->delete();
		
		}
		
		
		
	}
	
	
	public function LinkPath(Request $request){
		
		if($request->type === 'download'){
			
		if(strpos(str_replace(env('APP_URL'),'',$request->path),'storage') !== false)	{	
	activity()
  ->causedByAnonymous()
   ->withProperties(['type' => 'Photo_Download'])
   ->log(str_replace(env('APP_URL'),'',$request->path));
		
	}
		}else{
			
		if(strpos(str_replace(env('APP_URL'),'',$request->path),'storage') !== false)	{	
	activity()
  ->causedByAnonymous()
   ->withProperties(['type' => 'Photo_Visit'])
   ->log(str_replace(env('APP_URL'),'',$request->path));
		
	}
		}
		
		
	}
	
}
