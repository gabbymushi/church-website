<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\News;
use App\Staff;
use App\Jimbo;
use App\Download;
use App\Department;
use App\Project;
use DB;

class HomeController extends Controller
{
    public function __construct(){

        $this->middleware(['auth'],['except'=>array('aboutUs','allGallery','dme_history','dme_mission','index','users')]);

    }
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
        $data['askofu'] = Staff::where('askofu','1')->first();
        $data['majimbo']=Jimbo::all();
        $data['departments']=Department::all();
        $data['projects']=Project::all();
        $data['downloads'] =Download::orderBy('created_at','desc')->take(5)->get();

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

     public function dme_mission(){
        $data['events'] =Event::orderBy('created_at','desc')->take(5)->get();
        return view('home.dme-mission',$data);
    }
}
