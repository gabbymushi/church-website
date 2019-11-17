<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\ContactUs;
use Session;
use  App\Subscriptions;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::orderBy('created_at','desc')->take(2)->get();
        return view('home.contact-us',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         'name'=>'required',
         'email'=>'email|required',
         'comments'=>'required'
          
        ]);

        $comment = new ContactUs();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comments = $request->comments;
        $comment->phone = $request->phone;
        $comment->save();

        Session::flash('success','Message Submited Successfuly');

        return redirect()->route('contactus');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = ContactUs::findOrFail($id);
        return view('admin.contactus.show',compact('message'));
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
        $message = ContactUs::findOrFail($id);
        $message->delete();
        Session::flash('success','Message Deleted Successfuly');

        return redirect()->route('contactus.manage');
    }

    public function manage(){
        $messages = ContactUs::paginate(10);
        return view('admin.contactus.manage',compact('messages'));
    }

    public function subscription(Request $request){
         $subscription = new Subscriptions();
        $this->validate($request,['email'=>'required|email']);

         $subscription->email = $request->email;
         $subscription->save();
          Session::flash('success','Congratulation ,you have subscribed to DME');
         return redirect()->route('home');


    }

    public function manage_subscription(){
      $subscriptions = Subscriptions::paginate(10);
        return view('admin.contactus.manage_subscription',compact('subscriptions'));   
    }
    public function subscription_delete($id){

        $subscriptions = Subscriptions::findOrFail($id);
        $subscriptions->delete();
        Session::flash('success','Subscriptions Email Deleted Successfuly');

        return redirect()->route('subscription.manage');
    }

}
