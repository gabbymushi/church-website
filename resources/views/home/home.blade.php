@extends('layouts.main')
@section('content')
  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER);"></li>
      <li class="parallax" style="background-image:url(http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER);"></li>
    </ul>
  </div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.html">Sountheast Asia Meet</a></h5>
          <span class="meta-data">13th July, 2015</span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="July 13, 2015">
          <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
          <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
          <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
          <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
        </div>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="events.html" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
      </div>
    </div>
  </div>
  <!-- End Notice Bar --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-4 col-sm-4 featured-block"> <a href="our-staff.html" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="about.html" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="sermons.html" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3>More Coming Events</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.html">Monday Prayer</a></h4>
                      <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.html">Staff members meet</a></h4>
                      <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">25</span> <span class="month">Sep</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.html">Evening Prayer</a></h4>
                      <span class="event-dayntime meta-data">Friday | 06:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>
            <div class="spacer-30"></div>
            <!-- Latest News -->
            <div class="listing post-listing">
              <header class="listing-header">
                <h3>Latest News</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  @foreach($news as $news)
                  <li class="item post">
                    <div class="row">
                      <div class="col-md-4"> <a href="#" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a></div>
                      <div class="col-md-8">
                        <div class="post-title">
                          <h2><a href="{{url('/blog/'.$news->id)}}">{{$news->title}}</a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on {{date('jS F,Y',strtotime($news->created_at))}}</span></div>
                        <p>{{$news->content}}.</p>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </section>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 col-sm-6"> 
            <!-- Latest Sermons -->
            <div class="listing sermons-listing">
              <header class="listing-header">
                <h3>Recent Sermons</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date">Feb 14, 2014</span>
                    <h4><a href="single-sermon.html">How To Recover The Cutting Edge</a></h4>
                    <div class="featured-sermon-video">
                      <iframe width="200" height="150" src="http://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                  </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Featured Gallery -->
  <div class="featured-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h4>Updates from our gallery</h4>
          <a href="#" class="btn btn-default btn-lg">More Galleries</a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-video"> <a href="http://youtu.be/NEFfnbQlGo8" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
      </div>
    </div>
  </div>
  <!-- End Featured Gallery --> 
  @endsection