<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/posts', function () {
    return view('newsletters');
})->name('posts');Route::get('/posts', function () {
    return view('newsletters');
})->name('posts');

Route::middleware(['auth:sanctum', 'is_admin'])->get('/admins', function () {
    return view('admin');
})->name('admins');



Route::get('/post/{id}', function (Request $request, $id) {
    return view('LatestPosts',['id' => $id]);
});

Route::get('/Clearpost/{id}', function (Request $request, $id) {
    return view('clearPost',['id' => $id]);
});

Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {
	
	

Route::get('/image/{id}/edit', function (Request $request, $id) {
    return view('admin.editPhotos',['id' => $id]);
});
	
	Route::get('/admins/gallery', function () {
    return view('admin.gallery');
})->name('Admingallery');	
	
	Route::get('/admins/newImages', function () {
    return view('admin.uploadImages');
})->name('AdminNewImage');
	
	Route::get('/admins/Users', function () {
		return view('admin.Users');
});
	Route::get('/admins/NewPost', function () {
		return view('admin.NewPost');
});
	
	Route::get('datatablesdata', [App\Http\Controllers\DatatablesController::class,'anyData']);
	Route::post('admins/CreateAdmin', [App\Http\Controllers\DatatablesController::class,'CreateAdmin']);
	Route::post('admins/removeAdmin', [App\Http\Controllers\DatatablesController::class,'removeAdmin']);
	Route::post('admins/killAdmin', [App\Http\Controllers\DatatablesController::class,'killAdmin']);
	Route::post('admins/getRoles', [App\Http\Controllers\DatatablesController::class,'getRoles']);
	Route::post('admins/postImageUpload', [App\Http\Controllers\DatatablesController::class,'postImageUpload']);
	Route::post('admins/editImage', [App\Http\Controllers\DatatablesController::class,'editImage']);
	Route::post('admins/NewPostSave', [App\Http\Controllers\DatatablesController::class,'NewPostSave']);
	Route::post('admins/uploadImages', [App\Http\Controllers\DatatablesController::class,'uploadImages']);
	Route::post('admins/removeImg', [App\Http\Controllers\DatatablesController::class,'removeImg']);
	
	
	
Route::get('importTrans',function(){
	return Artisan::call('translations:import');
});
Route::get('findTrans',function(){
	return Artisan::call('translations:find');
});
Route::get('exportTrans',function(){
	return Artisan::call('translations:export');
});
Route::get('cleanTrans',function(){
	return Artisan::call('translations:clean');
});
	
});


Auth::routes();


//site functions
Route::get('siteFunctions/getBackgroundImages', [App\Http\Controllers\imageController::class, 'getBGImages'])->name('SiteFunctionBGImages');

Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
	Artisan::call('route:clear');
	Artisan::call('view:clear');
	Artisan::call('config:clear');
	Artisan::call('route:clear');
    return redirect()->back();
});




Route::get('migrate', function(){
	return Artisan::call('migrate');
});


Route::get('storagelink', function(){
	return Artisan::call('storage:link');
});



