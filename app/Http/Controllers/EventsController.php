<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventCategory;
use App\Event;
use App\News;
use Session;
use DB;

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

        if($request->hasFile('featured_image')){
            $image = $request->featured_image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/uploads/events',$new_image);
            $new_image = 'assets/uploads/events/'.$new_image;

        }
        if($request->hasFile('attachment')){
            $attachment = $request->attachment;
            $new_attachment = time().$attachment->getClientOriginalName();
            $attachment->move('assets/uploads/events',$new_attachment);
            $new_attachment = 'assets/uploads/events/'.$new_attachment;

        }
        
        $event = new Event;

        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->slug = str_slug($request->title);
        $event->end_date = $request->end_date;
        $event->event_category_id = $request->category_id;
        $event->featured_img = $new_image;
        $event->content = $request->content;
        $event->attachment=$new_attachment;

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
    public function show($slug)
    {
       
    $events['event'] = Event::where('slug',$slug)->first();
    $events['categories'] = EventCategory::all();
    $events['latest_events'] =Event::orderBy('created_at','desc')->take(3)->get();
        return view('events.single_event',$events);
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


        if($request->hasFile('featured_image')){
            $image = $request->featured_image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('assets/uploads/events',$new_image);
            $new_image = 'assets/uploads/events/'.$new_image;

        }
        if($request->hasFile('attachment')){
            $attachment = $request->attachment;
            $new_attachment = time().$attachment->getClientOriginalName();
            $attachment->move('assets/uploads/events',$new_attachment);
            $new_attachment = 'assets/uploads/events/'.$new_attachment;

        }

        $event = Event::where('id',$id)
                        ->update([
                         'title'=>$request->title,
                         'start_date'=>$request->start_date,
                         'end_date'=>$request->end_date,
                         'content'=>$request->content,
                         'event_category_id'=>$request->category_id,
                         'slug'=>str_slug($request->title),
                         'featured_img'=>$new_image,
                         'attachment'=>$new_attachment
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
         $events['posts'] =News::orderBy('created_at','desc')->take(3)->get();
         $events['events'] = Event::all();
         $events['categories'] = EventCategory::all();
         $events['latest_event'] = DB::table('events')->latest()->first();
         //events count relating to categories

        return view('events.all_events',$events);
    }
    public function eventsCalender(){
        return view('events.events-calender');
    }
}
