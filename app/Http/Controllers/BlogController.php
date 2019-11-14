<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsTag;
use App\File;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::orderBy('id','DESC')->get();
        return view('blog.blog', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new News();
        $destinationPath = 'assets/images/blog';
        $model->title = $request->input('title');
        $model->content = $request->input('content');
        //   $model->user_id = Auth::user()->user_id;
        $model->save();
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            if ($file->move($destinationPath, $file->getClientOriginalName())) {
                $fileModel = new File();
                $fileModel->name = $file->getClientOriginalName();
                $fileModel->mime_type = $file->getClientMimeType();
                $fileModel->news_id = $model->id;
                $fileModel->save();
            }
        }

    Session::flash('success','News created successfully');
    
        return redirect()->route('blog.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data['tags']=NewsTag::where(['news_id'=>$id])->with();
        $data['post'] = News::find($id);
        //  dd($data['post']);
        return view('blog.post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.blog.edit-post',compact('news'));
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

        $model =News::findOrFail($id);
        $destinationPath = 'assets/images/blog';
        $model->title = $request->input('title');
        $model->content = $request->input('content');
        //   $model->user_id = Auth::user()->user_id;
        $model->update();
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            if ($file->move($destinationPath, $file->getClientOriginalName())) {
                $fileModel = new File();
                $fileModel->name = $file->getClientOriginalName();
                $fileModel->mime_type = $file->getClientMimeType();
                $fileModel->news_id = $model->id;
                $fileModel->update();
            }
        }

      Session::flash('success','News created successfully');
    
      return redirect()->route('blog.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        Session::flash('success','News Deleted successfully');
      return redirect()->route('blog.manage');


    }

      public function manage(){
        $news = News::paginate(10);
        return view('admin.blog.index',compact('news'));
    }
}
