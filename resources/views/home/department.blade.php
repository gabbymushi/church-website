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
              @if(isset($department->featured))
              <img src="{{asset($department->featured)}}" alt="Department" class="img-thumbnail">
              <div style="font-size: 90%;
                  font-family: Verdana, Arial, sans-serif;
                  text-align: center; border-collapse: collapse; padding: 5px; background-color: #ccc; color: #000; ">{{$department->img_caption}}</div>
              @else
              <img src="http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER" alt="Department" class="img-thumbnail">
              @endif

           
               <div class="spacer-30"></div>
              
              <p>{!!$department->description!!}</p>
              <hr>
                <!-- <h3>Department Team</h3>
                <ul class="checks">
                  <li>Mildred George</li>
                  <li>Ashleigh Cox</li>
                  <li>Giorgiana Mărginean</li>
                  <li>Christine Mendez</li>
                </ul> -->
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