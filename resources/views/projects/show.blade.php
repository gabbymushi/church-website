@extends('layouts.main')
@section('content')
<!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/projects">DME Projects</a></li>
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
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">{{$project->name}}</h2>
            </header>
            <article class="post-content cause-item">
                <span class="post-meta meta-data">
                  <span><i class="fa fa-calendar"></i>{{$project->created_at}}</span>
                  <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
                  <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                </span>
                <div class="spacer-20"></div>
                
                <div class="row">
                  <div class="col-md-7">
                   
                    @if(isset($project->featured))
                    <img src="{{asset($project->featured)}}" class="img-responsive">
                    <div style="font-size: 90%;
                  font-family: Verdana, Arial, sans-serif;
                  text-align: center; border-collapse: collapse; padding: 5px; background-color: #ccc; color: #000; ">{{$project->img_caption}}</div>
                    @else
                     <img src="{{'assets/images/project.jpg'}}" alt="">
                     
                     @endif

                     
                    </div>
                  <div class="col-md-5">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <h4>Cause Progress</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                          </li>
                          <li class="list-group-item"> <span class="badge">Tsh 200000</span> Amount Needed </li>
                          <li class="list-group-item"> <span class="badge">Tsh 160000</span> Collected yet </li>
                          <li class="list-group-item"> <span class="badge accent-bg">80%</span> Percentile </li>
                          <li class="list-group-item"> <span class="badge">15</span> Days left to achieve target</li>
                        </ul>
                      <a href="#" class="btn btn-primary btn-lg btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>{!!$project->description!!}</p>
            </article>
            <!-- Payment Modal Window -->
            <div class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Donate to: <span class="accent-color payment-to-cause"></span></h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="row">
                          <div class="col-md-6">
                                <label>How much would you like to donate?</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">Tsh</span>
                                    <select name="donation amount" class="form-control">
                                        <option value="10000">10000</option>
                                        <option value="20000">20000</option>
                                        <option value="50000">50000</option>
                                        <option value="Custom">1000+</option>
                                    </select>
                                </div>
                            </div>
                          <div class="col-md-6 custom-donate-amount">
                                <label>Enter custom donation amount</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">$</span>
                              <input type="text" name="Custom Donation Amount" class="form-control">
                                </div>
                            </div>
                        </div>
                      <div class="row">
                          <div class="col-md-6">
                            <input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                            </div>
                          <div class="col-md-6">
                            <input type="text" name="lname" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                      <div class="row">
                          <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                            </div>
                          <div class="col-md-6">
                            <input type="phone" name="phone" class="form-control" placeholder="Your phone">
                            </div>
                        </div>
                      <div class="row">
                          <div class="col-md-6">
                            <textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                            </div>
                          <div class="col-md-6">
                            <textarea rows="3" cols="5" class="form-control" placeholder="Additional Notes"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Donate Now">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <p class="small short" style="color: red; font-weight: bold;"> If you would prefer to call in your donation, please call +255 27 255 3656</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Other DME Projects</h3>
              </div>
              <ul>
                @foreach(App\Project::where('id','!=',$project->id)->orderBy('created_at','desc')->take(5)->get() as $otherproject)
                <li><h4><a href="/project/show/{{$otherproject->id}}/{{$otherproject->slug}}">{{$otherproject->name}}</a></h4> </li>
                @endforeach
                
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Project Categories</h3>
              </div>
              <ul>
                <li><a href="#">Church</a> (10)</li>
                <li><a href="#">Children</a> (12)</li>
                <li><a href="#">Education</a> (34)</li>
                <li><a href="#">Women</a> (14)</li>
              </ul>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection