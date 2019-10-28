@extends('layouts.main')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
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
          @if(isset($staffs))
          @foreach($staffs as $staff)
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box" style="text-align: center;"> <img style="max-width: 150px; max-height: 100px" width="100p" src="{{asset($staff->photo)}}" alt=""> </div>
                <div class="grid-content staff-name text-center">
                  <p style="font-weight: bold;">{{$staff->fname}}&nbsp;{{$staff->lname}}</p>
                  <p><?php echo ucfirst($staff->designation) ?></p>
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

