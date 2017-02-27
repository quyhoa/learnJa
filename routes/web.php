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

// Route::get('/','HomeController@index')->middleware('auth');
Route::get('/','HomeController@index');
// tesst send mail
Route::get('/mail', function () {
    return view('inc.formMail');
});

Route::post('/message/send', ['uses' => 'MailController@basic_email', 'as' => 'front.fb']);

Route::get('level-5/{id}',[
	'as'   =>'level5',
	'uses' =>'LessonController@listLesson'
]);

// end test
Route::get('login',function(){
	if(Auth::check())
	{
		return Redirect::to('adm/');
	}
	return view('auth.login');
});
Route::post('/dang-nhap',[
		'as'   =>'login',
		'uses' =>'UserController@login'
	]);
Route::get('/request',[
		'as'   =>'password.request',
		'uses' =>'HomeController@request'
	]);
Route::post('logout',[
		'as' => 'logout',
		'uses' => 'UserController@logout'
	]);
// Route::get('content1','HomeController@content1');
// Route::get('form01','HomeController@form01');
// Route::get('/foo/bar','UriController@index');
// Route::get('/uri/register','UriController@register');
// Route::post('/user/register',array('uses'=>'UriController@postRegister'));
// Route::get('/cookie/set','UriController@setCookie');
// Route::get('/cookie/get','UriController@getCookie');
// Route::get('/header',function(){
//    return response("Hello", 200)->header('Content-Type', 'text/html');
// });
// Route::get('/cookie',function(){
//    return response("Hello", 200)->header('Content-Type', 'text/html')
//       ->withcookie('name','Virat Gandhi');
// });

// Route::get('json',function(){
//    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
// });

// // check mutilanguage
// Route::get('localization/{locale}','LocalizationController@index');

// ============================
// Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

//   Auth::routes();
//   Route::get('/home', 'HomeController@index');

  // Route::post('/lang', [
  //     'as' => 'switchLang',
  //     'uses' => 'LangController@postLang',
  // ]);

//   // Route::get('/', function () {
//   //     return view('home.home');
//   // });
// // Route::get('/','HomeController@index');
// 	Route::get('content1','HomeController@content1');
// 	Route::get('/logout',function(){
// 		return view('home.content1');
// 	});

// });
// =============Front end================
// Route::get('home', function () {
//     return response()->caps('foo');
// });

// ===========Route admin============
Route::group(['prefix' => 'adm', 'middleware' => 'auth'/*, 'namespace' => 'Admin'*/], function ()

{
	Route::get('/','UserController@index');
	Route::get('/index','UserController@index');
	Route::get('/show/{id}','UserController@show')->where('id','[0-9]+');	
	Route::get('/{id}/edit','UserController@edit');
	Route::get('/create','UserController@create');
	Route::post('/user/register','UserController@register');
	Route::put('/user/update/{id}','UserController@update');
	Route::get('/user/delete/{id}','UserController@delete');

	// group categories
	Route::group(['prefix'=>'category'],function(){
		Route::get('/index','CategoryController@index');
		Route::get('/create',[
				'as'   =>'category.create',
				'uses' =>'CategoryController@create'
			]);
		Route::post('/store','CategoryController@store');
		Route::get('/chi-tiet/{id}',[
				'as'	=>'category.show',
				'uses'	=>'CategoryController@show'
			]);
		Route::get('/edit/{id}',[
				'as'	=>'category.edit',
				'uses'	=>'CategoryController@edit'
			]);

		Route::put('/update/{id}',[
				'as'	=>'category.update',
				'uses'	=>'CategoryController@update'
			]);
	});
	// group product
	Route::resource('product','ProductController');
	// Mail
	Route::get('mail-manager',[
		'as'=>'mail',
		'uses' =>'CategoryController@update'
	]);

	Route::get('sendbasicemail','MailController@basic_email');
	Route::get('sendhtmlemail','MailController@html_email');
	Route::get('sendattachmentemail','MailController@attachment_email');
});
