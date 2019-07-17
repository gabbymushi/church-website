@extends('layouts.main')
@section('content')
<div class="body"> 
  <!-- Start Site Header -->
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
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
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">06</span> <span class="month">Feb</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.html">{{$event->title}}</a></h4>
                      <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="{{route('single_event',['id'=>$event->id])}}" class="btn btn-default btn-sm">Details</a></div>
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
              <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="featured-event-image">
              <div class="featured-event-container">
                <label class="label label-danger">Upcoming</label> <!-- Replace class label-danger to label-default for passed events -->
                <div class="featured-event-time">
                    <span class="date">21</span>
                    <span class="month">Aug, 14</span>
                </div>
                <h4 class="featured-event-title"><a href="#">A nice event title</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
              </div>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Events Categories</h3>
              </div>
              <ul>
                <li><a href="#">Church Home</a> (9)</li>
                <li><a href="#">About Us</a> (24)</li>
                <li><a href="#">All Events</a> (13)</li>
                <li><a href="#">Sermons Archive</a> (23)</li>
                <li><a href="#">Our Ministries</a> (65)</li>
              </ul>
            </div>
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
                </li>
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