@extends('layouts.main')
@section('content')
    <!-- Start Hero Slider -->
  <div class="slider-rev-cont" style="margin-top: 80px;">
      <div class="tp-banner-container">
          <div class="tp-banner">
              <ul style="display:none;">
                  <!-- SLIDE  -->
                  <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"  data-saveperformance="off"  data-title="Slide 1">
                      <!-- MAIN IMAGE -->
                      <img src="{{asset('assets/images/slider/slide_kkkt.png')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                      <!-- LAYERS -->
          
                      <!-- LAYER NR. 1 -->
                    
                     
                     <!-- LAYER NR. 1 -->
                      <div class="tp-caption large_text randomrotate tp-resizeme" 
                           data-x="100" 
                           data-y="200"  
                          data-speed="300" 
                          data-start="500" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="3000" 
               data-endspeed="300" 
              
                          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Kusimikwa Askofu
                      </div>
              
                      <!-- LAYER NR. 3 -->
                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption large_text randomrotate tp-resizeme" 
                           data-x="100" 
                           data-y="259"  
                          data-speed="300" 
                          data-start="800" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="4000" 
               data-endspeed="300" 
              
                          style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Jimbo La Magharibi
                      </div>
              
                      <!-- LAYER NR. 4 -->
                          <!-- LAYER NR. 3 -->
                      <div class="tp-caption randomrotate customout tp-resizeme" 
                           data-x="100" 
                           data-y="330"  
                           data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="300" 
                          data-start="1100" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="5000" 
                          data-endspeed="300" 
              
                          style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='btn btn-primary btn-lg' style="color:#fff;">More Events</a> 
                      </div>
                  </li>
                  <!-- SLIDE  -->
                  <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"  data-saveperformance="off"  data-title="Slide 2">
                      <!-- MAIN IMAGE -->
                      <img src="{{asset('assets/images/slider/slide_kkkt2.png')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                      <!-- LAYERS -->
          
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption large_text randomrotate tp-resizeme" 
                           data-x="100" 
                           data-y="200"  
                          data-speed="300" 
                          data-start="500" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="3000" 
               data-endspeed="300" 
              
                          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Love the God 
                      </div>
              
                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption large_text randomrotate tp-resizeme" 
                           data-x="100" 
                           data-y="259"  
                          data-speed="300" 
                          data-start="800" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="4000" 
               data-endspeed="300" 
              
                          style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Love his Creations 
                      </div>
              
                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption randomrotate customout tp-resizeme" 
                           data-x="100" 
                           data-y="330"  
                           data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="300" 
                          data-start="1100" 
                          data-easing="Power3.easeInOut" 
                          data-splitin="none" 
                          data-splitout="none" 
                          data-elementdelay="0.1" 
                          data-endelementdelay="0.1" 
                           data-end="5000" 
               data-endspeed="300" 
              
                          style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href='sermons.html' class='btn btn-primary btn-lg' style="color:#fff;">Our Sermons</a> 
                      </div>
                  </li>
              </ul> 
              <div class="tp-bannertimer" style="display:none;"></div>  
          </div>
      </div>
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
                 Elias Kitoi ,Bishop ELCT-DME
              @endif

             
            </strong> <span class="more">Bishop Profile</span> </a>
             </div>
            <div class="col-md-4 col-sm-4 featured-block"> 
              <h3><a href="#">Our Work >></a></h3>
            
              <div class="grid-item-inner">
                <div class="media-box">
                  <div class="flexslider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                    <ul class="slides text-center" style="margin: auto;">
                      <li class="item"><a href="{{asset('assets/images/chuo.jpg')}}" data-rel="prettyPhoto[postname]">
                      <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap; margin: auto; color: #000; margin-top: -5px;">
                          Education 
                      </div>
                        <img src="{{asset('assets/images/chuo.jpg')}}" alt="">
                       
                      </a>

                      </li>
                       <li class="item"><a href="{{asset('assets/images/shule-kkkt.jpg')}}" data-rel="prettyPhoto[postname]">
                         <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap; margin: auto; color: #000; margin-top: -5px;">
                          Education 
                      </div>
                        <img src="{{asset('assets/images/shule-kkkt.jpg')}}" alt="">
                       
                      </a>

                      </li>
                      <li class="item" style="text-align: center"><a href="{{asset('assets/images/hospital.jpg')}}" data-rel="prettyPhoto[postname]">
                          <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap;margin: auto; color: #000; margin-top: -5px;">
                          Health 
                      </div>
                        <img src="{{asset('assets/images/hospital.jpg')}}" alt="">
                       
                      </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            
            </div>
           <div class="col-md-4 col-sm-4 featured-block"> 
              <h3><a href="/projects">Projects >></a></h3>
            
              <div class="grid-item-inner">
                <div class="media-box">
                  <div class="flexslider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                    <ul class="slides">
                      <li class="item"><a href="{{asset('assets/images/project1.jpg')}}" data-rel="prettyPhoto[postname]">
                       <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap; margin: auto; color: #000; margin-top: -5px;">
                          Love his Creations  
                      </div>
                        <img src="{{asset('assets/images/project1.jpg')}}" alt="">
                       
                      </a>

                      </li>
                       <li class="item"><a href="{{asset('assets/images/project2.PNG')}}" data-rel="prettyPhoto[postname]">
                          <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap; margin: auto; color: #000; margin-top: -5px;">
                          Community health and Development  
                      </div>
                        <img src="{{asset('assets/images/project2.jpg')}}" alt="">
                       
                      </a>

                      </li>
                      <li class="item"><a href="{{asset('assets/images/project3.jpg')}}" data-rel="prettyPhoto[postname]">
                         <div class="tp-caption large_text randomrotate tp-resizeme transbox" 
                          style="z-index: 6; font-size: 15px; max-width: auto; max-height: auto; white-space: nowrap; margin: 20px; margin-left: 80px;margin: auto; color: #000; margin-top: -5px;">
                          Women and Youth Empowerment   
                      </div>
                        <img src="{{asset('assets/images/project3.jpg')}}" alt="">
                       
                      </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            
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
                      <div class="col-md-4"> <a href="{{url('/blog/'.$news->id)}}" class="media-box"> <img src="{{asset('assets/images/blog/'.$news->files->name)}}" alt="" class="img-thumbnail"></a></div>
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
                   <li class="item sermon featured-sermon"  style="max-height: 40px"> 
                    <a href="{{route('jimbo.show',[$jimbo->slug])}}"> <h4 style="font-weight: bold;">{{$jimbo->name}}</h4> </a>
                  </li>
                  @endforeach
                  @endif
                </ul>
              </section>
            </div>
            <br>
            <hr style="margin-top: 150px;">
            <div class="download-center">
               <header class="listing-header">
                <h4>Download Center</h4>
              </header>
               <ul class="checks">
               @if(isset($downloads))
               @foreach($downloads as $document)
                 <a href="{{Storage::url($document->document)}}" target="blank"><li>{{$document->title}}</li></a> 
                 @endforeach
                 @endif
                  
                </ul>
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