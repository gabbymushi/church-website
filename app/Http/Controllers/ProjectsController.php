<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Session;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $allprojects = Project::paginate(5);
        return view('projects.index',compact('allprojects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

       
         
        // $featured = $request->file('featured')->store('public/projects');

          if($request->hasFile('featured')){
             $this->validate($request,[
              'featured'=>'mimes:png,jpg,jpeg|Max:20000'
             ]);
            $image = $request->featured;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/projects',$new_image);
            $new_image = 'assets/projects/'.$new_image;
            $project->featured =  $new_image;

        }
          

      $project->name = $request->name;
      $project->slug = str_slug($request->name);
      $project->description = $request->description;
      $project->img_caption = $request->img_caption;
      $project->save();


      Session::flash('success','Project created successfully');
      return redirect()->route('projects.manage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug)
    {   
     $project = Project::where('id',$id)
                            ->where('slug',$slug)->first();
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit',compact('project'));
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
        $project = Project::findOrFail($id);

        
         
       

          if($request->hasFile('featured')){
            $this->validate($request,[
              'featured'=>'mimes:png,jpg,jpeg|Max:20000'
            ]);
            $image = $request->featured;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/projects',$new_image);
            $new_image = 'assets/projects/'.$new_image;
            $project->featured =  $new_image;
            

        }
          

      $project->name = $request->name;
      $project->slug = str_slug($request->name);
      $project->description = $request->description;
      $project->img_caption = $request->img_caption;
      $project->update();


      Session::flash('success','Project updated successfully');
      return redirect()->route('projects.manage');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.manage')->with('success','Project Deleted Successfuly');
    }

    //project manage function

    public function manage(){
        $projects = Project::paginate(10);
        return view('admin.projects.index',compact('projects'));
    }
}
