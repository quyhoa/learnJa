<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class UriController extends Controller
{
    public function index(Request $request)
    {
    	// sữ dụng phương thức path
    	$path = $request->path();
    	echo "Path method ".$path;
    	echo "<br>";

    	// Usage of is method
      	$pattern = $request->is('foo/*');
      	echo 'is Method: '.$pattern;
      	echo '<br>';
      
      	// Usage of url method
      	$url = $request->url();
      	echo 'URL method: '.$url;
    }

    public function register()
    {
    	return view('uri.register');
    }

    // 
    public function postRegister(RegisterRequest $request)
    {
      $this->validate($request);
      // $this->validate($request,[
      //   'name'=>'required|max:10',
      //   'username'=>'required|max:10|min:6',
      //   'password'=>'required|min:6|max:10',
      // ]);
    	// echo "<pre>";
    	// echo $request;

      //Retrieve the name input field
      // $name = $request->input('name');
      // echo 'Name: '.$name;
      // echo '<br>';
      
      // //Retrieve the username input field
      // $username = $request->username;
      // echo 'Username: '.$username;
      // echo '<br>';
      
      // //Retrieve the password input field
      // $password = $request->password;
      // echo 'Password: '.$password;
    }
    // 
    public function setCookie(Request $request)
    {
      $minutes = 1;
      $response = new Response('Hello World');
      // register cookie
      $response->withCookie(cookie('name', 'virat', $minutes));
      return $response;
   	}
   public function getCookie(Request $request)
   	{
      $value = $request->cookie('name');
      echo $value;
   	}
}
