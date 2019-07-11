<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        return view('dashboard.home');
    }

    public function users()
    {
        return view('users.index');
    }
    public function create()
    {
        //
    }

    public function index()
    {
        $data['news'] = News::all();
        return view('home.home', $data);
    }
    public function aboutUs()
    {
        return view('home.about-us');
    }
}
