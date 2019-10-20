<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\News;
use App\Staff;
use App\Jimbo;
use App\Download;
use DB;

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
        return view('admin.home');
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
        $data['news'] = News::orderBy('created_at','desc')->take(2)->get();
        $data['events'] =Event::orderBy('created_at','desc')->take(5)->get();
        $data['last_record'] = DB::table('events')->latest()->first();
        $data['askofu'] = Staff::where('designation','askofu')->first();
        $data['majimbo']=Jimbo::all();
        $data['downloads'] =Download::orderBy('created_at','desc')->take(5)->get();
       // dd($data['askofu']);
        return view('home.home', $data);
    }
    public function aboutUs()
    {
        return view('home.about-us');
    }

    public function allGallery(){
        return view('home.all-gallery');
    }

    public function dme_history(){
        return view('home.dme-history');
    }
}
