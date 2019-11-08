@extends('layouts.main')
@section('content')
<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">{{$sharika->name}}</li>
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
              <h2 class="post-title">{{$sharika->name}}</h2>
            </header>
            <div class="post-content">
              @if(isset($sharika->featured))
              <img src="http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER" alt="Women Ministry" class="img-thumbnail">
              @else
              <img src="{{asset('assets/uploads/jimbo-img/jimbo.jpg')}}" class="img-thumbnail">
              @endif
               <div class="spacer-30"></div>
              <p>{{$sharika->description}}</p>
              <hr>

              <!-- Start sharika management team-->
              <h3>{{$sharika->name}} Management Team</h3>
                <div class="staff-dme text-center" style="color: #000;">
              @foreach(App\Staff::where('usharika_id',$sharika->id)->where('shrkmgt',1)->get() as $mgntstaff)
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
          
          <!--End of sharika staff-->
            <br>
              <hr>
                <h3>{{$sharika->name}} Streets with Related Staff</h3>
          <table id="sharika" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                 <th>Name of the Street</th>
                  <th>Staff Name</th>
                  <th>Designation</th>
                  <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
           @foreach(App\Mtaa::where('sharika_id',$sharika->id)->get() as $mtaa)
                      @foreach(App\Staff::where('mtaa_id',$mtaa->id)->get() as $staff)
                      <tr>
                        <td>{{$mtaa->name}}</td>
                        <td>{{$staff->fname.' '.$staff->lname}}</td>
                         <td>{{$staff->designation}}</td>
                        <td>{{$staff->phone1}}</td>
                      </tr>
          @endforeach
          @endforeach
          
             </tbody>
       
         </table>
      
                
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 sidebar">
            
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