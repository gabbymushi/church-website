@extends('layouts.main')
@section('content')
<style type="text/css">
  
  .rotate90 {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
</style>
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
              <h2 class="post-title">DME Mission</h2>
            </header>
            <div class="post-content">
              
               <div class="spacer-30"></div>
              <p style="font-family: sans-serif; font-size: 16px; color: #000;">Dhamira ya KKKT Dayosisi ya Meru ni Kushuhudia injili ya Yesu Kristo( Mathayo 28:19-20) iletayo wokovu kamili(Luka 4:18-19) Kimwili,Kiakili,kiroho,Kisaikolojojia,kiuchumi na katika kutunza uumbaji kwa watu wote kuhubiri,Kufundisha na kutetea Haki  na kushuhudia kwa manenona matendo ilikuwafanya watu wote wamfahamu Mungu na Yesu Kristo(Yohana 17:3) na kuwa wanafunzi wake kwa msaada wa Roho Mtakatifu.</p>
              <hr>
              <header class="single-post-header clearfix">
              <h2 class="post-title">DME Vision</h2>
            </header>
              <p style="font-family: sans-serif; font-size: 16px; color: #000;">Taswira ya KKKT dayosisi ya Meru  ni kuona kwamba:Kwa Uongozi wa roho mtakatifu na roho ya Umoja na upendo Dayosisi yetu inawaita na kuwavuta  kwa Yesu Kristo watu wote kwa njia ya Neno la Mungu  kama lilivyo katika biblia yaani Agano la jipya ,Agano la kale ili wamfahamu ,wamwamminina wamkiri kuwa Bwana na mwokozi wao ili wapate uzima wa Milele.</p>
             
              <hr>
                <h3>DME Administrative Structure</h3>
              
                <img src="{{asset('assets\images\DME-tructure.jpg')}}" width="400" class="rotate90" style="margin-top: -130px; margin-left: 120px;">
                <!-- <ul class="checks">
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
            <div class="widget-gallery widget">
              <div class="sidebar-widget-title">
                <h3>Latest from Gallery</h3>
              </div>
              <ul>
                <li> <a href="{{asset('assets\images\img-7.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-7.jpg')}}" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="{{asset('assets\images\img-6.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-6.jpg')}}" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="{{asset('assets\images\img-5.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-5.jpg')}}" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="{{asset('assets\images\img-4.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-4.jpg')}}" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="{{asset('assets\images\img-3.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-3.jpg')}}" alt="" class="img-thumbnail"> </a></li>
                <li> <a href="{{asset('assets\images\img-2.jpg')}}" class="media-box post-image" data-rel="prettyPhoto[galwid]"> <img src="{{asset('assets\images\img-2.jpg')}}" alt="" class="img-thumbnail"> </a></li>
              </ul>
            </div>
            <hr>


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