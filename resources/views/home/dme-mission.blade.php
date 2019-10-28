@extends('layouts.main')
@section('content')

<div class="body"> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Mission & Vission</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

<!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Church Mission</h2>
            </header>
            <div class="post-content">
              
               <div class="spacer-30"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
              <hr>
              <header class="single-post-header clearfix">
              <h2 class="post-title">Our Church Vision</h2>
            </header>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
             
              <hr>
                <h3>Our Core Values</h3>
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
            <div class="widget-gallery widget">
              <div class="sidebar-widget-title">
                <h3>Latest Gallery Items</h3>
              </div>
              <ul>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="http://placehold.it/80x80&amp;text=IMAGE" alt="" class="img-thumbnail"> </a></li>
              </ul>
            </div>


            <div class="widget-upcoming-events widget">
              <div class="sidebar-widget-title">
                <h3>Latest Events</h3>
              </div>
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
                  <li class="item event-item clearfix">
                    <div class="event-date"> <span class="date">{{$date2[2]}}</span> <span class="month">{{$monthName}}</span> </div>
                    <div class="event-detail">
                      <h4><a href="{{route('single_event',['id'=>$event->slug])}}">{{$event->title}}</a></h4>
                      <span class="event-dayntime meta-data">{{$date}}</span> </div>
                   
                  </li>
                  @endforeach
                  @endif
        
                </ul>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection