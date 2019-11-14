@extends('layouts.main')
@section('content')
<div class="body"> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('all_events')}}">Events</a></li>
            <li class="active">{{$event->title}}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>Events</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="{{route('all_events')}}" class="pull-right btn btn-primary">All events</a> </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Print" ><i class="fa fa-print"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us" ><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a> </nav>
              <h2 class="post-title">{{$event->title}}</h2>
            </header>
            <article class="post-content">
              <div class="event-description"> <img src="{{asset($event->featured_img)}}" class="img-responsive">
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Event details</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">
                          <li><i class="fa fa-calendar"></i> {{date('jS F,Y',strtotime($event->created_at))}}</li>
                          <li><i class="fa fa-clock-o"></i> 08:00 AM - 2:00 PM</li>
                          <li><i class="fa fa-map-marker"></i>ELCT Diocese of Meru </li>
                          <li><i class="fa fa-phone"></i> +255 27 255 3656</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="list-group">
                      <li class="list-group-item"> <span class="badge">14</span> Attendees </li>
                      <li class="list-group-item"> <span class="badge">4</span> Staff members </li>
                    </ul>
                  </div>
                </div>
                <p>{{$event->content}}</p>
                @if(isset($event->attachment))
                 <p>Download the event attachment here : <a href="{{asset($event->attachment)}}" target="blank">File</a></p>
                @endif
                
              </div>
            </article>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget-upcoming-events widget">
              <div class="sidebar-widget-title">
                <h3>Upcoming Events</h3>
              </div>
              <ul>
                @foreach($latest_events as $comming_event)
                <?php
                   $date = explode('-', $comming_event->start_date);
                   //Get month name
                  $monthNum  =  $date[1];
                  $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                  $monthName = $dateObj->format('F'); // March
                  $monthName = mb_strimwidth($monthName, 0, 3);
                   ?>
                <li class="item event-item clearfix">
                  <div class="event-date"> <span class="date">{{$date[2]}}</span> <span class="month">{{$monthName}}</span> </div>
                  <div class="event-detail">
                    <h4><a href="#">{{$comming_event->title}}</a></h4>
                    <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                </li>
                @endforeach
             
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Events Categories</h3>
              </div>
              <ul>
                @foreach($categories as $category)
                <li>
                  <a href="#">{{$category->name}}</a> ({{App\Event::where("event_category_id",$category->id)->get()->count()}})
                </li>
                @endforeach
              </ul>
            </div>
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                @foreach($news as $new)
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="">{{$new->title}}</a> <span class="meta-data"><i class="fa fa-calendar"></i> on {{date('jS F,Y',strtotime($new->created_at))}}</span> </div>
                </li>
                 @endforeach
          
          
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
@endsection 