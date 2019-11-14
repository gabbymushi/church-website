@extends('layouts.main')
@section('content')
<div class="body"> 
  <!-- Start Nav Backed Header -->
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">Gallery</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Photo Gallery</h1>
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
          <ul class="isotope-grid" data-sort-id="gallery">
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-7.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-6.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-5.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-3.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-gallery">
              <div class="grid-item-inner">
                <div class="media-box">
                  <div class="flexslider" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
                    <ul class="slides">
                      <li class="item"><a href="{{asset('assets\images\img-2.jpg')}}" data-rel="prettyPhoto[postname]"><img src="{{asset('assets\images\img-2.jpg')}}" alt=""></a></li>
                      <li class="item"><a href="{{asset('assets\images\img-1.jpg')}}" data-rel="prettyPhoto[postname]"><img src="{{asset('assets\images\img-1.jpg')}}" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-link">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-8.jpg')}}" target="_blank" class="media-box"> <img src="{{asset('assets\images\img-8.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-4.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-4.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-link">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-5.jpg')}}" target="_blank" class="media-box"> <img src="{{asset('assets\images\img-7.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-video">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-6.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-6.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-video">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-7.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-7.jpg')}}" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{asset('assets\images\img-3.jpg')}}" data-rel="prettyPhoto" class="media-box"> <img src="{{asset('assets\images\img-3.jpg')}}" alt=""> </a> </div>
            </li>
          </ul>
        </div>
        <div class="text-align-center">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
@endsection