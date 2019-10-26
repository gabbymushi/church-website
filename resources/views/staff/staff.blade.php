@extends('layouts.main')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(http://placehold.it/1280x635&amp;text=IMAGE+PLACEHOLDER);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li class="active">Staff</li>
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
          <h1>DME Management Staff</h1>
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
          if(isset($staffs))
          @foreach($staffs as $staff)
          <div class="col-md-3 col-sm-3">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box" style="text-align: center;"> <img style="max-width: 150px; max-height: 100px" width="100p" src="{{asset($staff->photo)}}" alt=""> </div>
                <div class="grid-content text-center">
                  <h3>{{$staff->fname.' '.$staff->lname}}</h3>
                  
                  <p>{{$staff->designation}}</p>
                </div>
              </div>
            </div>
          </div>
         @endforeach
         @endif
        </div>
      </div>
    </div>
  </div>
@endsection

