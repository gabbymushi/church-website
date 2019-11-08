<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sharika;
use App\Event;
use App\Jimbo;
use Session;
use Auth;

class SharikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $sharika = Sharika::all();
         return view('admin.sharika.index')->with('sharika',$sharika);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $majimbo = Jimbo::all();
        return view('admin.sharika.create-sharika')->with('majimbo',$majimbo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $sharika = new Sharika;
        $this->validate($request,[
         'name'=>'required',
        ]);

        $sharika->name = $request->name;
        $sharika->slug = str_slug($request->name);
        $sharika->description = $request->description;
        $sharika->jimbo_id = $request->jimbo_id;

        $sharika->save();
        Session::flash('success','Sharika created Successfully');
        return redirect()->route('sharika');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug)
    {   $events = Event::orderBy('created_at','desc')->take(5)->get();
        $sharika = Sharika::where('id',$id)
                            ->where('slug',$slug)->first();
        return view('usharika.view-usharika',compact('sharika'))->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sharika = Sharika::find($id);

        return view('admin.sharika.edit')->with('usharika',$sharika);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usharika = Sharika::find($id);

        $usharika->name = $request->name;
        $usharika->slug = str_slug($request->name);
        $usharika->description = $request->description;
        $usharika->jimbo_id = 2;
        $usharika->update();
        Session::flash('success','Sharika updated Successfully');
        return redirect()->route('sharika');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sharika = Sharika::find($id);
        $sharika->delete();
        Session::flash('success','Sharika deleted Successfully');
        return redirect()->route('sharika');
    }
}
