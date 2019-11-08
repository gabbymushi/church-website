@extends('layouts.main')
@section('content')
 <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">{{$department->name}}</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <header class="single-post-header clearfix">
              <h2 class="post-title">{{$department->name}}</h2>
            </header>
            <div class="post-content">
              <img src="http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
              <p>{{$department->description}}</p>
              <hr>
                <h3>Department Team</h3>
                <ul class="checks">
                  <li>Mildred George</li>
                  <li>Ashleigh Cox</li>
                  <li>Giorgiana Mărginean</li>
                  <li>Christine Mendez</li>
                </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 sidebar">
            <!-- Photo Gallery Widget -->
             <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Other Departments</h3>
              </div>
              <ul>
                @foreach(App\Department::where('id','!=',$department->id)->get() as $d)
                <li><a href="{{route('department.show',[$d->id,$d->slug])}}">{{$d->name}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="widget-upcoming-events widget">
              <div class="sidebar-widget-title">
                <h3>Upcoming Events</h3>
              </div>
              <ul>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Staff members meet</a></h4>
                    <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                </li>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">Monday Prayer</a></h4>
                    <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection