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
    {  $staffs = Staff::where('dmemgt',1)->get();
        return view('staff.staff')
            ->with('staffs',$staffs);
    }


    public function manage(){
        $staff = Staff::paginate(5);
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
         'phone1'=>'required',
         'designation'=>'required',

        ]);

         $staff = new Staff;
        if ($request->hasFile('photo')) {
         $photo = $request->photo;
         $photo_new = time().$photo->getClientOriginalName();
         $photo->move('assets/uploads/staff',$photo_new);
         $photo_new_name = 'assets/uploads/staff/'.$photo_new;
         $staff->photo = $photo_new_name;   
        }

        
        $staff->title = $request->title;
        $staff->fname = $request->fname;
        $staff->mname = $request->mname;
        $staff->lname = $request->lname;
        $staff->designation = $request->designation;
        $staff->phone1 = $request->phone1;
        $staff->phone2 = $request->phone2;
        $staff->description = $request->description;
        
        $staff->jimbo_id = $request->jimbo_id;
        $staff->usharika_id = $request->usharika_id;
        $staff->mtaa_id = $request->mtaa_id;
        $staff->dmemgt = $request->dmemgt;
        $staff->jmbmgt = $request->jmbmgt;
        $staff->shrkmgt = $request->shrkmgt;
        $staff->askofu = $request->askofu;
        $staff->save();
        Session::flash('success','Staff created successfully');
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
        $staff = Staff::find($id);
        return view('staff.staff-edit')
                ->with('staff',$staff);
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
         'fname'=>'required',
         'lname'=>'required',
         'phone1'=>'required|numeric',
         'designation'=>'required',
         
        ]);

        $staff = Staff::find($id);
        if ($request->hasFile('photo')) {
         $photo = $request->photo;
         $photo_new = time().$photo->getClientOriginalName();
         $photo->move('assets/uploads/staff',$photo_new);
         $photo_new_name = 'assets/uploads/staff/'.$photo_new;   
         $staff->photo = $photo_new_name;
        }

         $staff->title = $request->title;
        $staff->fname = $request->fname;
        $staff->mname = $request->mname;
        $staff->lname = $request->lname;
        $staff->designation = $request->designation;
        $staff->phone1 = $request->phone1;
        $staff->phone2 = $request->phone2;
        $staff->description = $request->description;
        
        $staff->jimbo_id = $request->jimbo_id;
        $staff->usharika_id = $request->usharika_id;
        $staff->mtaa_id = $request->mtaa_id;
        $staff->dmemgt = $request->dmemgt;
        $staff->jmbmgt = $request->jmbmgt;
        $staff->shrkmgt = $request->shrkmgt;
        $staff->askofu = $request->askofu;
        $staff->update();
        Session::flash('success','Staff updated successfully');
        return redirect()->route('manage.staff');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete(); 
        Session::flash('success','Staff deleted successfully');
        return redirect()->route('manage.staff');
    }
}
