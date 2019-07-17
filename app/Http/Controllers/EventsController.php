<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventCategory;
use App\Event;
use Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(2);
        return view('events.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = EventCategory::all();
        return view('events.create')->with('categories',$categories);
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
         'title'=>'required',
        ]);
        
        $event = new Event;

        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->event_category_id = $request->category_id;
        $event->content = $request->content;

        $event->save();
        Session::flash('success','Event created successfull');
        return redirect()->route('events');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.single_event')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = EventCategory::all();
        $event = Event::find($id);
        return view('events.edit')->with('event',$event)
                                  ->with('categories',$categories);

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
         'title'=>'required',
        ]);

        $event = Event::where('id',$id)
                        ->update([
                         'title'=>$request->title,
                         'start_date'=>$request->start_date,
                         'end_date'=>$request->end_date,
                         'content'=>$request->content
                        ]);

        Session::flash('success','Event update successfully');
        return redirect()->route('events'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        Session::flash('success','Event successfully deleted');
        return redirect()->route('events'); 

    }

    //Retun front view All Events view

    public function all_events(){

         $events = Event::all();
        return view('events.all_events')->with('events',$events);

    }
}
