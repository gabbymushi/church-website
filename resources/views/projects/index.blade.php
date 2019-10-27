 @extends('layouts.main')
@section('content')
 <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">DME Projects</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<!-- Start Nav Backed Header -->
 <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Projects</h1>
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
          <div class="col-md-9 posts-archive causes-archive">
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="/projects/show"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="/projects/show">Education for Masai children</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Jan, 2014</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                  </span>
                  <div class="progress-label">
                      80% Donated of <span>$200000</span>
                      <label class="cause-days-togo label label-default pull-right">15 days to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam...</p>
                </div>
              </div>
            </article>
            
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="/projects/show"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="/projects/show">Stop Child Labour</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Jan, 2014</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Child</a>, <a href="#">India</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                  </span>
                  <div class="progress-label">
                      30% Donated of <span>$110000</span>
                      <label class="cause-days-togo label label-default pull-right">3 months to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" data-appear-progress-animation="30%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam...</p>
                </div>
              </div>
            </article>
            
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="/projects/show"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a>
                  	<a href="#" class="btn btn-primary btn-block donate-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="/projects/show">Africa's thirst</a></h3>
                  <span class="post-meta meta-data">
                  	<span><i class="fa fa-calendar"></i> 28th Jan, 2014</span>
                    <span><i class="fa fa-archive"></i> <a href="#">Africa</a>, <a href="#">Water</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                  </span>
                  <div class="progress-label">
                      55% Donated of <span>$6200000</span>
                      <label class="cause-days-togo label label-default pull-right">27 days to go</label>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-appear-progress-animation="55%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam...</p>
                </div>
              </div>
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
                                    <span class="input-group-addon">$</span>
                                    <select name="donation amount" class="form-control">
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="Custom">100+</option>
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
                    <p class="small short">If you would prefer to call in your donation, please call 1800.785.876</p>
                  </div>
                </div>
              </div>
            </div>
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
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget search-form-widget">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search Posts...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search fa-lg"></i></button>
                </span> </div>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Categories</h3>
              </div>
              <ul>
                <li><a href="#">Faith</a> (10)</li>
                <li><a href="#">Missions</a> (12)</li>
                <li><a href="#">Salvation</a> (34)</li>
                <li><a href="#">Worship</a> (14)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection