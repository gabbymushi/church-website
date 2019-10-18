<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mtaa;
use App\Sharika;
use Session;
use Auth;

class MtaaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    { 
        $mitaa = Mtaa::all();
        $sharika = Sharika::all();
         return view('admin.mtaa.index')->with('mitaa',$mitaa)
                                        ->with('sharika',$sharika);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mtaa.create-mtaa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $mtaa = new Mtaa;
        $this->validate($request,[
         'name'=>'required',
        ]);

        $mtaa->name = $request->name;
        $mtaa->slug = str_slug($request->name);
        $mtaa->description = $request->description;
        $mtaa->sharika_id = $request->sharika_id;

        $mtaa->save();
        Session::flash('success','Mtaa created Successfully');
        return redirect()->route('mitaa');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mtaa = Mtaa::find($id);

        return view('admin.Mtaa.edit')->with('mtaa',$mtaa);

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
        $mtaa = Mtaa::find($id);

        $mtaa->name = $request->name;
        $mtaa->slug = str_slug($request->name);
        $mtaa->description = $request->description;
        $mtaa->sharika_id = 3;
        $mtaa->update();
        Session::flash('success','Mtaa updated Successfully');
        return redirect()->route('mitaa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mtaa = mtaa::find($id);
        $mtaa->delete();
        Session::flash('success','Mtaa deleted Successfully');
        return redirect()->route('mitaa');
    }
}
