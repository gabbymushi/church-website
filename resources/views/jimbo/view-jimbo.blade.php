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
        <img src="{{asset('assets/uploads/jimbo-img/jimbo.jpg')}}" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
        <p>{{$jimbo->description}}</p>
        <hr>
        <h3>Viongozi wa jimbo</h3>
        <div class="staff-dme text-center" style="color: #000;">
          @foreach(App\Staff::where('jimbo_id',$jimbo->id)->where('jmbmgt',1)->get() as $mgntstaff)
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box">
                  @if(isset($mgntstaff->photo))
                  <img src="{{asset($mgntstaff->photo)}}" alt="">
                  @else
                   <img src="http://placehold.it/500x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                  @endif 
               </div>
                <div class="grid-content staff-name">
                  <p style="font-weight: bold;">{{$mgntstaff->fname}}&nbsp;{{$mgntstaff->lname}}</p>
                  <p><?php echo ucfirst($mgntstaff->designation) ?></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
           
          </div>
         @if(isset($jimbo->sharikas))
           <div class="spacer-30"></div>
          <hr>

          <h3>SHARIKA {{$jimbo->name}}</h3>
          <div class="sharika-dme">
           
               @foreach($jimbo->sharikas as $sharika)
              <!-- Start Accordion -->
              <a href="{{route('usharika.show',[$sharika->id,$sharika->slug])}}" class="btn btn-primary btn-block donate-paypal">Usharika wa {{$sharika->name}}</a>
            <!-- End Accordion -->
              @endforeach
             </div>
             @endif
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 sidebar">
             <header class="single-post-header clearfix">
               <h2 class="post-title">Other Districts</h2>
              </header>
            <ul class="checks">
              @foreach(App\Jimbo::where('id','!=',$jimbo->id)->get() as $jimbo)
               
                  <h4><li style="padding-bottom: 10px; padding-top: 10px;">
                     <a href="{{route('jimbo.show',[$jimbo->slug])}}">
                     {{$jimbo->name}}
                      </a>
                    </li></h4>
               
              @endforeach
            </ul>
          
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
            <header class="single-post-header clearfix">
               <h2 class="post-title">Districts Projects</h2>
              </header>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection