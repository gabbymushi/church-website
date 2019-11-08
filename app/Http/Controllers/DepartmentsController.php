<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Event;
use Session;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(10);

        return view('admin.departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department();

        $this->validate($request,[
          'featured'=>'mimes:png,jpg,jpeg|Max:20000'
          ]);
         
         $featured = $request->file('featured')->store('public/departments');
          

          $department->name = $request->name;
          $department->slug = str_slug($request->name);
          $department->description = $request->description;
          $department->featured = $featured;
          $department->save();


      Session::flash('success','Department created successfully');
      return redirect()->route('departments.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug)
    {   
        $events =Event::orderBy('created_at','desc')->take(5)->get();
        $department = Department::where('id',$id)
                            ->where('slug',$slug)->first();

        return view('home.department',compact('department'))->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        Session::flash('success','Department Deleted Successfully');
        return redirect()->route('departments.manage');
    }
}
