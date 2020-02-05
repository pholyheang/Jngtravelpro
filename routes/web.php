<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login','UserController@getLoginForm')->name('getlogin');
Route::post('/login', 'UserController@doLogin')->name('doLogin');

Route::get('system/help', 'HelpController@show')->name('show');
Route::get('system/help/{slug}', 'HelpController@index')->name('help');
Route::get('system/search', 'HelpController@research')->name('research');

//--------------------|||||-- front end section -----|||||||----------

Route::get('/', 'HomeController@getHomePage')->name('home');
Route::get('/view-details/{name}', 'HomeController@getPostDetails')->name('postDetail');
Route::get('/services', 'HomeController@getService')->name('getService');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contactForm')->name('contactForm');

Route::get('/news', 'HomeController@getNews')->name('news');
Route::get('/news/single-view/{name}', 'HomeController@getNewsDetails');
// ------------End front End ---------------- ||||-----------------
 
Route::group(['middleware' => ['IsAdmin']], function () {
	Route::prefix('admin')->group(function () {
	    Route::get('/', 'AdminController@getAdmin');
	    Route::get('/slide/list', 'AdminController@getSlide')->name('slideList'); 
	    Route::get('/slide/add', 'AdminController@getSlideForm')->name('slideForm'); 
	    Route::post('/slide/add', 'AdminController@addSlide')->name('slideAdd');
	    Route::get('/slide/edit/{id}', 'AdminController@getEditSlide');
	    Route::post('/slide/edit/', 'AdminController@udateSlide')->name('editSlide');
	    Route::get('/slide/delete/', 'AdminController@delete')->name('getDelete');

	    // client section
	    Route::get('/client/list', 'ClientController@getClientList')->name('clientList');
	    Route::get('/client/create', 'ClientController@getClientForm')->name('clientForm');
	    Route::post('/client/add', 'ClientController@clientCreate')->name('clientCreate');
	    Route::get('/client/edit/{id}', 'ClientController@getClientedit');
	    Route::post('/client/edit', 'ClientController@clientUpdate')->name('clientUpdate');
	    Route::get('/client/delete', 'ClientController@getClientDelete')->name('clientDelete');

	    // news section 
	    Route::get('/news/list', 'PostController@getNewsList')->name('getNewsList');
	    Route::get('/news/create', 'PostController@getNewsForm')->name('getNewsForm');
	    Route::post('/news/create', 'PostController@AddNews')->name('AddNews');
	    Route::get('/news/edit/{id}', 'PostController@getUpdate')->name('getEdit');
	    Route::post('/news/edit', 'PostController@updateNews')->name('UpdateNews');
	    Route::get('/news/delete', 'PostController@deleteNews')->name('DeleteNews');
	    Route::get('/news/category', 'PostController@deleteNews')->name('DeleteNews');

	    // Route::get('/{view}/lists', 'UserController@getResponeData')->name('UrlRespone');
	    Route::get('/post/list', 'ProgramController@getList')->name('postList');
	    // Route::get('/hello', 'ProgramController@getHello');
	    Route::get('/post/add-new', 'ProgramController@getPost')->name('getPost');
	    Route::post('/post/add-new', 'ProgramController@AddPost')->name('addPost');
	    Route::get('/post/edit/{id}', 'ProgramController@getEditPost')->name('getPostEdit');
	    Route::post('/post/edit', 'ProgramController@updatePost')->name('updatePost');
	   	Route::get('/post/delete', 'ProgramController@Delete')->name('deletePost');

	   	Route::get('/service/list', 'ProgramController@getService')->name('getServicePackage');
	   	Route::get('/our-service/list', 'ProgramController@getOurService')->name('getOurService');
	   	// Route::get('/service/delete', 'ProgramController@DeleteService')->name('DeleteService');

	   	Route::get('/category', 'ProgramController@getCategory')->name('categoryList');
	   	Route::get('/app/category', 'ProgramController@getAppCategory')->name('categoryListApp');
	   	Route::post('/app/category/add', 'ProgramController@addCategory')->name('categoryAdd');
	   	Route::post('/app/category/update', 'ProgramController@updateCategory')->name('categoryUpdate');
	   	Route::get('/app/category/delete', 'ProgramController@DeleteCat')->name('DeleteCat');

	   	Route::get('/user/list', 'UserController@getUserList')->name('getUserList');
	   	Route::get('/user/add', 'UserController@getUserForm')->name('getUserForm');
	   	Route::post('/user/add', 'UserController@addUserData')->name('addUser');
	   	Route::get('/user/edit/{id}', 'UserController@editUserData')->name('getUserFormEdit');
	   	Route::post('/user/edit', 'UserController@updateUserData')->name('editUser');
	   	Route::get('/user/delete', 'UserController@destroy')->name('delUser');
		Route::post('/user/signout', 'UserController@signout')->name('logout'); 
	});
});





