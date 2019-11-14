<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Auth;
use Session;

class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/downloads/index')->with('downloads',Download::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/downloads/create-download');
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
          'document'=>'required|mimes:pdf,doc,docx|Max:20000'
             ]);
          $document = new Download;
         
         
        if($request->hasFile('document')){
            $image = $request->document;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/documents',$new_image);
            $new_image = 'assets/documents/'.$new_image;
            $document->document =  $new_image;
            

        }

          $document->title = $request->title;
          $document->save();
          Session::flash('success','Download created successfully');
        return redirect()->route('downloads');
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
        $document = Download::findOrFail($id);
        return view('admin.downloads.edit',compact('document'));
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
          'document'=>'required|mimes:pdf,doc,docx|Max:20000'
             ]);
          $document = Download::findOrFail($id);
         
         
        if($request->hasFile('document')){
            $image = $request->document;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/documents',$new_image);
            $new_image = 'assets/documents/'.$new_image;
            $document->document =  $new_image;
            

        }

          $document->title = $request->title;
          $document->update();
          Session::flash('success','Download update successfully');
        return redirect()->route('downloads');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Download::findOrFail($id);
        $document->delete();
        Session::flash('success','Download delete successfully');
        return redirect()->route('downloads');
    }
}
