<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// check traits
trait Admin
{
  public function checkUser()
  {
    return "You are User!";
  }

  public function checkAdmin()
  {
    return "You are Admin";
  }
}

trait Admin1
{
  public function checkUser1()
  {
    return "You are User1!";
  }

  public function checkAdmin1()
  {
    return "You are Admin1";
  }
}
// end check

class HomeController extends Controller
{
    use Admin, Admin1;
        // use Admin, Admin1
      //     {
      //         Admin::checkLogin insteadof Admin1;
      //         //Sử dụng method checkLogin ở trait Admin thay cho  method checkLogin ở trait Admin
      //         Admin1::isAdmin insteadof Admin
      //         //Sử dụng method isAdmin ở trait Admin thay cho method isAdmin ở trait Authenticate
      //     }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth',['except' => ['login','logout']]);
        // $this->middleware('auth',['except' => 'logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump($this->checkUser());
        var_dump($this->checkUser1());
        exit;
        // return view('home.home');
    }

    public function content1()
    {
        return view('home.content1')->with('name','form01');
    }

    public function form01()
    {
        return view('home.form01');
    }
}
