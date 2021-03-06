  <!-- Start Top Row -->
  <div class="toprow" style="">
  	<div class="container">
    	<div class="row">
          	<div class="col-md-6 col-sm-6">
            	<nav class="top-menus">
                	<ul>
                    	<li>
                        	<a href="#">Swahili</i></a>
                     	</li>
                    	<li>
                        	<a href="#">English</a>
                     	</li>
                    	
                 	</ul>
              	</nav>
         	</div>
          	<div class="col-md-6 col-sm-6" id="login">
            	<nav class="top-menus pull-right">
                	<ul>
                    	<li>
                        	<a target="_blank" href="{{route('login')}}">DME Login</a>
                     	</li>
                    	<li>
                        	<a href="{{route('events.calender')}}">Calendar</a>
                     	</li>
                    	<li>
                        	<a href="#">Donate Now</a>
                     	</li>
                 	</ul>
              	</nav>
         	</div>
      	</div>
   	</div>
  </div>
  <!-- End Top Row -->
  <!-- Start Site Header -->
  <header class="site-header" >
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-8" style="">
            <h1 class="logo"> <a href="/"><img style="max-width:500px; max-height: 80px; margin-right: 10px;" src="{{asset('assets/images/logo.png')}}" alt="Logo"></a> </h1>

            <h3 class="title1" style="margin-top: 10px ; margin-left: 10px; color:#074368; font-weight:bold;"><b>ELCT - Evangelical Lutheran Church in Tanzania</b></h3>
            <div id="diosece">          
              <h3 class="title1" style="text-decoration: none; color:#074a29; margin-left: 10px; margin-top: -20px;">Diosece of Meru</h3>
              </div>

          
          </div>
      <div class="col-md-4 col-sm-6 col-xs-4" style="height: 100%;">
            <div class="top-search hidden-sm hidden-xs">
            	<form>
                	<div class="input-group">
                 		<span class="input-group-addon" style="background-color:#074a29; color: #fff;"><i class="fa fa-search"></i></span>
                		<input type="text" class="form-control" placeholder="Search DME">
                 	</div>
              	</form>
            </div>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="{{url('/')}}">Home</a>
                </li>
                <li><a href="{{url('/about-us')}}">About Us</a>
                  <ul class="dropdown">
                    <li><a href="{{route('dme.history')}}">Our History</a></li>
                	<li><a href="{{route('contactus')}}">Contact</a></li>
                  <li><a href="/all/staff">Our Staff</a></li>
                  <li><a href="{{route('dme.mission')}}">Mission & Vision</a></li>
                 
                  </ul>
                </li>
                <li class="megamenu"><a href="#">Our Work</a>
                  <ul class="dropdown">
                    <li>
                      <div class="megamenu-container container">
                        <div class="row">
                          <div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Today's Prayer</span>
                            <iframe width="200" height="150" src="http://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-pagelines"></i> Our Ministries</span>
                            <ul class="sub-menu">
                              @foreach (App\Ministry::all() as $ministry)
                              <li><a href="{{url('ministry/'.$ministry->slug)}}">{{$ministry->name}}</a></li>
                             @endforeach
                              <!-- <li><a href="ministry.html">Men's Ministry</a></li> -->
                             <!--  <li><a href="ministry.html">Children's Ministry</a></li>
                              <li><a href="ministry.html">Youth Ministry</a></li>
                              <li><a href="ministry.html">Prayer Requests</a></li> -->
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i> Upcoming Events</span>
                            <ul class="sub-menu">
                              @if(App\Event::orderBy('created_at','desc')->take(5)->get() !=null)
                              @foreach(App\Event::orderBy('created_at','desc')->take(5)->get() as $headerev)
                              <li><a href="{{route('single_event',['id'=>$headerev->slug])}}">{{ str_limit($headerev->title, 25)}}</a> <span class="meta-data">{{date('jS F,Y',strtotime($headerev->created_at))}}</span> </li>
                              @endforeach
                              @endif

                              
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-book"></i> Departments</span>
                            <ul class="dropdown">
                           @if(App\Department::all() != null)
                             @foreach(App\Department::all() as $department)
                            <li><a href="{{route('department.show',[$department->id,$department->slug])}}">{{$department->name}}</a></li>
                             @endforeach
                             @endif
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Events</a>
                  <ul class="dropdown">
                    <li><a href="{{route('all_events')}}">All Events</a></li>
                    <li><a href="{{route('events.calender')}}">Events Calender</a></li>
                    
                  </ul>
                </li>
                <li><a href="#">Faith</a>
                   <ul class="dropdown">
                    <li><a href="#">DME Teaching</a></li>
                    <li><a href="#">Daily Bible Reading</a></li>
                    <li><a href="#">Faith and Society</a></li>
                    <li><a href="#">Journal of Lutheran Ethics</a></li>
                  </ul> 
                </li>
                <li><a href="#">Projects</a>
                  <ul class="dropdown">
                    @if(App\Project::all() != null)
                    @foreach(App\Project::all() as $project)
                    <li>
                      <a href="{{route('project.show',[$project->id,$project->slug])}}">{{$project->name}}</a>
                    </li>
                    @endforeach
                    @endif
                  </ul>
                </li>
                <li><a href="{{url('/blog')}}">News</a>
                </li>
               
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>