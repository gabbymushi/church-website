@extends('layouts.main')
@section('content')
  <!-- Start Hero Slider -->
  <div  style="margin-top: 80px;" class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class="parallax text-center" style="background-image:url({{asset('assets/images/slider/slide_kkkt.PNG')}});">
        <div class="text-center" style="display: inline-block; position: absolute; background-color:rgba(0,0,0,.5); padding: 10px 10px 0px 10px; margin-left: -500px color: #ffffff; margin-top: 400px; font-weight: bold;"><h4 style="color:white;">KANISA LA KIINJILI LA KILUTHERI TANZANIA</h4></div>
      </li>
      <li class="parallax text-center" style="background-image:url({{asset('assets/images/slider/slide_kkkt2.PNG')}});">
        <div class="text-center" style="display: inline-block; position: absolute; background-color:rgba(0,0,0,.5); padding:10px 10px 0px 10px; color: #ffffff; margin-top: 400px; font-weight: bold;"><h4 style="color:white; text-decoration: underline;">The Church focuses on propagating the "holistic" Gospel serving man through spiritual</h4></div>
      </li>
       <li class="parallax text-center" style="background-image:url({{asset('assets/images/slider/slide_kkkt2.PNG')}});">
        <div class="text-center" style="display: inline-block; position: absolute; background-color:rgba(0,0,0,.5); padding:10px 10px 0px 10px; color: #ffffff; margin-top: 400px; font-weight: bold;"><h4 style="color:white; text-decoration: underline;">The Church focuses on propagating the "holistic" Gospel serving man through spiritual</h4></div>
      </li>
    </ul>
  </div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.html">@if(isset($last_record)) {{$last_record->title}}</a></h5>
           <?php $latest_date = date('F j ,Y',strtotime($last_record->start_date)) ;?>
          <span class="meta-data">{{$latest_date}}</span> </div>
          @endif
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="{{$latest_date}}">
          <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
          <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
          <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
          <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
        </div>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="{{route('all_events')}}" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
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
            <div class="col-md-4 col-sm-4 featured-block"> 
              <h3>Our Bishop</h3>
              <a href="{{route('all.staff')}}" class="img-thumbnail">
             @if(isset($askofu))
             <img src="{{asset('/'.$askofu->photo)}}" alt="staff"> <strong style="margin-bottom:0px;">
               {{$askofu->fname .' '.$askofu->lname.' '.', Bishop ELCT-DME' }}
              @else
               <img src="{{asset('assets/images/staff/askofu.jpg')}}" alt="staff"> <strong style="margin-bottom:0px;">
                 Daniel Elias Ngungath
              @endif

             
            </strong> <span class="more">Bishop Profile</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> 
              <h3>What we Do</h3>
              <a href="{{route('all.staff')}}" class="img-thumbnail"> <img src="{{asset('assets\uploads\maaskofu.jpg')}}" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block">
              <h3>Resources</h3>
             <a href="sermons.html" class="img-thumbnail"> <img src="{{asset('assets\uploads\sermons.jpg')}}" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
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
                  @if(isset($events))
                  @foreach($events as $event)
                  <?php 
                  $date =date('jS F,Y',strtotime($event->start_date)) ;
                  $new_event_date = date('Y-m-d',strtotime($date));
                  $date2 = explode('-',$new_event_date);
                  //Get month name
                  $monthNum  =  $date2[1];
                  $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                  $monthName = $dateObj->format('F'); // March
                  $monthName = mb_strimwidth($monthName, 0, 5);
                  ?>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">{{$date2[2]}}</span> <span class="month">{{$monthName}}</span> </div>
                    <div class="event-detail">
                      <h4><a href="{{route('single_event',['id'=>$event->slug])}}">{{$event->title}}</a></h4>
                      <span class="event-dayntime meta-data">{{$date}}</span> </div>
                    <div class="to-event-url">
                      <div><a href="{{route('single_event',['id'=>$event->slug])}}" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  @endforeach
                  @endif
        
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
                      <div class="col-md-4"> <a href="#" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a></div>
                      <div class="col-md-8">
                        <div class="post-title">
                          <h2><a href="{{url('/blog/'.$news->id)}}">{{$news->title}}</a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on {{date('jS F,Y',strtotime($news->created_at))}}</span></div>
                        <p>{!!$news->content!!}.</p>
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
                <h4>DME Structure</h4>
              </header>
              <section class="listing-cont">
                <ul class="text-center">
                  @if(isset($majimbo))
                  @foreach($majimbo as $jimbo)
                   <li class="item sermon featured-sermon"> 
                    <a href="{{route('jimbo.show',[$jimbo->slug])}}"> <h4 style="font-weight: bold;">{{$jimbo->name}}</h4> </a>
                  </li>
                  @endforeach
                  @endif
                </ul>
              </section>
            </div>
            <div class="download-center">
               <header class="listing-header">
                <h4>Download Center</h4>
              </header>
              
              <a href="#"><p>DME Almanac</p></a>
              <a href=""><p>DME Magazine</p></a>
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
          <a href="{{route('gallery.all')}}" class="btn btn-default btn-lg">More Galleries</a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="{{asset('assets\uploads\kkt_news.jpg')}}" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="{{asset('assets\uploads\maaskofu.jpg')}}" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-video"> <a href="http://youtu.be/NEFfnbQlGo8" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="{{asset('assets\uploads\newhere.jpg')}}" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="{{asset('assets\uploads\newhere.jpg')}}" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="{{asset('assets\uploads\sermons.jpg')}}" alt=""> </a> </div>
      </div>
    </div>
  </div>
  <!-- End Featured Gallery --> 
  @endsection