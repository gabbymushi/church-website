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
                <div class="media-box"> <img src="http://placehold.it/500x300&amp;text=IMAGE+PLACEHOLDER" alt=""> </div>
                <div class="grid-content">
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

            <div class="accordion" id="accordionArea">
              <div class="accordion-group panel">
                <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#Area{{$sharika->id}}">Usharika wa {{$sharika->name}}<i class="fa fa-angle-down"></i> </a> </div>
                <div id="Area{{$sharika->id}}" class="accordion-body collapse">
                  <div class="accordion-inner">
                  <table class="table table-striped" style="color: #000;">
                    <thead style="background-color: #CCC; font-weight: bold;">
                      <th>Mtaa</th>
                      <th>Jina Kamili</th>
                      <th>Cheo</th>
                      <th>Namba ya simu</th>
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
              </div>
            </div>
            <!-- End Accordion -->
              @endforeach
             </div>
             @endif
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
                <h3>Events</h3>
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