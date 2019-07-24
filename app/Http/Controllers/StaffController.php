<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.staff');
    }


    public function manage(){
        $staff = Staff::paginate(2);
        return view('staff.manage-staff')
                  ->with('staffs',$staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.staff-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'fname'=>'required',
         'lname'=>'required',
         'phone1'=>'required|numeric',
         'phone2' => 'numeric',
         'designation'=>'required'
        ]);
        if ($request->hasFile('photo')) {
         $photo = $request->photo;
         $photo_new = time().$photo->getClientOriginalName();
         $photo->move('assets/uploads',$photo_new);
         $photo_new_name = 'assets/uploads/'.$photo_new;   
        }

        $staff = new Staff;
        $staff->fname = $request->fname;
        $staff->mname = $request->mname;
        $staff->lname = $request->lname;
        $staff->designation = $request->designation;
        $staff->phone1 = $request->phone1;
        $staff->phone2 = $request->phone2;
        $staff->facebook_link = $request->facebook;
        $staff->tweeter_link = $request->tweeter;
        $staff->instagram_link = $request->instagram;
        $staff->other_link = $request->other;
        $staff->description = $request->description;
        $staff->photo = $request->photo;
        $staff->save();
        Session::flash('success','Staff created successfull');
        return redirect()->route('manage.staff');



        

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
        //
    }
}
