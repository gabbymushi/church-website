<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use Session;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ministries'] = Ministry::all();
        return view('admin.ministry.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ministries'] = Ministry::all();
        return view('admin.ministry.create-ministry', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ministry = new Ministry();
        $ministry->name = $request->name;
        $ministry->description = $request->description;
        $ministry->slug = str_slug($request->name);
        $ministry->save();
        Session::flash('success', 'Ministry added successfully');
        return redirect('ministry');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lug)
    {
        $data['ministry'] = Ministry::where(['slug' => $lug])->first();
        return view('ministry.view-ministry', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        // echo $slug;
        // exit;
        $data['ministry'] = Ministry::where(['slug' => $slug])->first();
        return view('admin.ministry.edit', $data);
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
        $event = Ministry::where('id', $id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        Session::flash('success', 'Ministry update successfully');
        return redirect()->route('ministry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Ministry::find($id);

        $category->delete();

        Session::flash('success','Ministry deleted successfully');
        return redirect()->route('ministry');
    }
}
