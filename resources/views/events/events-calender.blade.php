@extends('layouts.main')
@section('content')
<!-- Start Page Header -->
<div class="body"> 
  <div class="nav-backed-header parallax" style="background-image:url(images/slide2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Events Calender</li>
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
          <h1>Events Calender</h1>
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
          <div class="col-md-12">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
@endsection