<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
        // return view('home');
        return view('home.home');
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
