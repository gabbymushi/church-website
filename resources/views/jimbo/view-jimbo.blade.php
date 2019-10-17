@extends('layouts.main')
@section('content')
<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">{{$jimbo->name}}</li>
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
              <h2 class="post-title">{{$jimbo->name}}</h2>
            </header>
            <div class="post-content">
              <img src="http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
              <p>{{$jimbo->description}}</p>
              <hr>
              <h3>Get Involved</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
              <a href="contact.html" class="btn btn-primary">Find a Lifegroup</a>
              <hr>
                <h3>Ministry Team</h3>
                <ul class="checks">
                  <li><a href="#">Mildred George</a></li>
                  <li>Ashleigh Cox</li>
                  <li>Giorgiana Mărginean</li>
                  <li>Christine Mendez</li>
                </ul>
            </div>
            <table class="table table-striped">
              <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Age</th>
              </thead>
              <tbody>
               <tr>
                 <a href="#">  <td>1</td>
                  <td>Daniel Elias</td>
                  <td>25</td>
                  </a>
                </tr>
              </tbody>
            </table>
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
                <h3>Jimbo Events</h3>
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