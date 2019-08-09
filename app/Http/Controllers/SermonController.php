<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use Session;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sermons'] = Sermon::orderBy('id', 'DESC')->get();
        return view('admin.sermon.index', $data);
    }
    public function allSermons()
    {
        $data['sermons'] = Sermon::orderBy('id', 'DESC')->get();
        return view('sermon.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sermon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Sermon();
        $destinationPath = 'assets/images/sermon';
        $model->title = $request->input('title');
        $model->slug =  str_slug($request->input('title'));
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
        Session::flash('success', 'Sermon added successfully');
        return redirect('sermon');
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
        $data['sermon'] = Sermon::where('id', $id)->first();
        return view('admin.sermon.edit', $data);
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
        $sermon = Sermon::where('id', $id)
            ->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        Session::flash('success', 'Sermon update successfully');
        return redirect()->route('sermon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Sermon::find($id);
        $category->delete();
        Session::flash('success','Sermon deleted successfully');
        return redirect()->route('sermon');
    }
}
