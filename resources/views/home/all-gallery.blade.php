@extends('layouts.main')
@section('content')
<div class="body"> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Photo Gallery</li>
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
              <div class="grid-item-inner"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-gallery">
              <div class="grid-item-inner">
                <div class="media-box">
                  <div class="flexslider" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
                    <ul class="slides">
                      <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname]"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                      <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname]"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-link">
              <div class="grid-item-inner"> <a href="http://www.google.com" target="_blank" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-link">
              <div class="grid-item-inner"> <a href="http://www.google.com" target="_blank" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-video">
              <div class="grid-item-inner"> <a href="https://vimeo.com/19564018" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-video">
              <div class="grid-item-inner"> <a href="http://youtu.be/NEFfnbQlGo8" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a> </div>
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