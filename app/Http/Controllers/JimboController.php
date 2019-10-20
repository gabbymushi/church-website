<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jimbo;
use Session;
use Auth;

class JimboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['majimbo'] = Jimbo::all();
        return view('admin.majimbo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['majimbo'] = Jimbo::all();
        return view('admin.majimbo.create-jimbo', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->name);
      $Jimbo = new Jimbo();

        $this->validate($request,[
          'featured'=>'mimes:png,jpg,jpeg|Max:20000'
          ]);
         
         $featured = $request->file('featured')->store('public/majimbo');
          

      $Jimbo->name = $request->name;
      $Jimbo->slug = str_slug($request->name);
      $Jimbo->description = $request->description;
      $Jimbo->featured = $featured;
      $Jimbo->save();


      Session::flash('success','Jimbo created successfully');
      return redirect()->route('manage.jimbo');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $jimbo = Jimbo::where('slug',$slug)->first();
       
        return view('jimbo.view-jimbo')->with('jimbo',$jimbo);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jimbo = Jimbo::find($id);

       return view('admin.majimbo.edit')->with('jimbo',$jimbo);
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
        $this->validate($request,[
         'name'=>'required',
        ]);
        $jimbo = Jimbo::find($id);
        $jimbo->name = $request->name;
        $jimbo->slug = str_slug($request->name);
        $jimbo->description = $request->description;
        $jimbo->update();

        Session::flash('success','Jimbo updated successfully');
        return redirect()->route('manage.jimbo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jimbo = Jimbo::find($id);
        $jimbo->delete();
        Session::flash('success','Jimbo deleted successfully');
        return redirect()->route('manage.jimbo');

    }
}
