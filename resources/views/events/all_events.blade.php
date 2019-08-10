@extends('layouts.main')
@section('content')
<div class="body"> 
  <!-- Start Site Header -->
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{asset('assets/images/events_all.png')}});">
    <div class="container">
      upcaming_events
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Events</li>
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
        <div class="col-md-12">
          <h1>Events</h1>
        </div>
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
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h3>All events</h3>
                  </div>
                  <div class="listing-header-sub col-md-6 col-sm-6">
                    <h5>February</h5>
                    <nav class="next-prev-nav"> <a href="#"><i class="fa fa-angle-left"></i></a> <a href="#"><i class="fa fa-angle-right"></i></a> </nav>
                  </div>
                </div>
              </header>
              <section class="listing-cont">
                <ul>
                  @foreach($events as $event)
                  <?php
                   $date = explode('-', $event->start_date);
                   //Get month name
                  $monthNum  =  $date[1];
                  $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                  $monthName = $dateObj->format('F'); // March
                  $monthName = mb_strimwidth($monthName, 0, 5);
                   ?>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">{{$date[2]}}</span> <span class="month">{{$monthName}}</span> </div>
                    <div class="event-detail">
                      <h4><a href="{{route('single_event',['id'=>$event->slug])}}">{{$event->title}}</a></h4>
                      <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="{{route('single_event',['id'=>$event->slug])}}" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </section>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
             <!-- Featured Event Widget -->
            <div class="widget featured_event_widget"> 
              <div class="sidebar-widget-title">
                <h3>Featured Event</h3>
              </div>
              <img src="{{$latest_event->featured_img}}" alt="" class="featured-event-image">
              <div class="featured-event-container">
                <label class="label label-danger">Upcoming</label> <!-- Replace class label-danger to label-default for passed events -->
                <?php
                   $date = explode('-', $latest_event->start_date);
                   //Get month name
                  $monthNum  =  $date[1];
                  $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                  $monthName = $dateObj->format('F'); // March
                  $monthName = mb_strimwidth($monthName, 0, 5);
                   ?>
                <div class="featured-event-time">
                    <span class="date">{{$date[2]}}</span>
                    <span class="month">{{$monthName}}, {{$date[0]}}</span>
                </div>
                <h4 class="featured-event-title"><a href="#">{{$latest_event->title}}</a></h4>
                <p>{{$latest_event->content}}</p>
              </div>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Events Categories</h3>
              </div>
              <ul>
                @foreach($categories as $category)
              
                <li><a href="#">{{$category->name}}</a> ({{App\Event::where("event_category_id",$category->id)->get()->count()}})</li>
                @endforeach
                
              </ul>
            </div>
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                @if(isset($posts))
                @foreach($posts as $post)
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="{{asset('$post->featured_img')}}" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">{{$event->title}}</a> <span class="meta-data">

                    <i class="fa fa-calendar"></i>{{date('jS F,Y',strtotime($post->created_at))}}</span> </div>
                </li>
                @endforeach
                @endif
              </ul>
            </div>
            <!-- Recent Comments Widget -->
            <div class="widget_recent_comments widget">
              <div class="sidebar-widget-title">
                <h3>Recent Comments</h3>
              </div>
              <ul>
                <li class="recentcomments"> <a href="#">Admin</a> on <a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> </li>
                <li class="recentcomments"> Admin on <a href="#">Voluptatum deleniti atque corrupti</a> </li>
                <li class="recentcomments"> <a href="#">Admin</a> on <a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection