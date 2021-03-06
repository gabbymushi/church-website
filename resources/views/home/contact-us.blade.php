
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
            <li class="active">Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Location</h2>
            </header>
            <div class="post-content">
              <div id="gmap">
                <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=-3.2505404,36.6925952&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>
              </div>
              <div class="row">
                <form method="post"   action="{{route('contactus.store')}}">
                  @csrf
                  <div class="col-md-6 margin-15">
                    <div class="form-group">
                      <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                      @if($errors->has('name'))
                      <span style="color: red">{{$errors->first('name')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                      @if($errors->has('email'))
                      <span style="color: red">{{$errors->first('email')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="">Submit now!</button>
                  </div>
                </form>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div id="message"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar"> 
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
                <ul>
                  @foreach($news as $news)
                  <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="{{url('/blog/'.$news->id)}}">{{$news->title}}</a> <span class="meta-data"><i class="fa fa-calendar"></i> on {{date('jS F,Y',strtotime($news->created_at))}}</span> </div>
                  </li>
                 
                  @endforeach
                </ul>
          
            </div>
          </div>
          <!-- Contacts information -->
            <div class="col-md-3 sidebar"> 
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h4>Contacts Informations</h4>
              </div>
                <ul class="checks">
                  <li>
                    <b style="font-weight: bold;">Mob: </b>+255 27 255 3656
                  </li>
                  <li>
                   <b style="font-weight: bold;">Email: </b>elctdme@habari.co.tz
                  </li>
                  <li>
                   <b style="font-weight: bold;">Website: </b>www.elctdme.co.tz
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
@endsection