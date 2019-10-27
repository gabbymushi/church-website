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
                		<input type="text" class="form-control" placeholder="Search events ,news">
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
                    <li><a href="{{route('dme.mission')}}">Mission & Vision</a></li>
                	<li><a href="{{route('contactus')}}">Contact</a></li>
                  <li><a href="{{route('contactus')}}">Our Staff</a></li>
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
                              <li><a href="single-event.html">Monday Prayer</a> <span class="meta-data">Monday | 06:00 PM</span> </li>
                              <li><a href="single-event.html">Staff members meet</a> <span class="meta-data">Tuesday | 08:00 AM</span> </li>
                              <li><a href="single-event.html">Evening Prayer</a> <span class="meta-data">Friday | 07:00 PM</span> </li>
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-book"></i> Departments</span>
                            <ul class="sub-menu">
                              <li><a href="shortcodes.html">Education Department</a></li>
                              <li><a href="typography.html">Hr Department</a></li>
                    			<li><a href="shop.html">Health Department</a></li>
                    			<li><a href="shop-sidebar.html">Treasury Department</a></li>
                    			<li><a href="shop-sidebar.html">Youth Department</a></li>
                          <li><a href="shop-sidebar.html">Women and Children Department</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="events.html">Events</a>
                  <ul class="dropdown">
                    <li><a href="{{route('all_events')}}">Events Listing</a></li>
                    <li><a href="{{route('events.calender')}}">Events Calender</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{route('sermon.all')}}">Sermons</a>
                  <!-- <ul class="dropdown">
                    <li><a href="sermon-albums.html">Sermon Albums</a></li>
                    <li><a href="sermons.html">Sermons Archive</a></li>
                    <li><a href="single-sermon.html">Single Sermon</a></li>
                  </ul> -->
                </li>
                <li><a href="gallery-2cols-pagination.html">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="gallery-2cols-pagination.html">With Pagination</a>
                      <ul class="dropdown">
                        <li><a href="gallery-2cols-pagination.html">2 Columns</a></li>
                        <li><a href="gallery-3cols-pagination.html">3 Columns</a></li>
                        <li><a href="gallery-4cols-pagination.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li><a href="gallery-2cols-filter.html">With Filter</a>
                      <ul class="dropdown">
                        <li><a href="gallery-2cols-filter.html">2 Columns</a></li>
                        <li><a href="gallery-3cols-filter.html">3 Columns</a></li>
                        <li><a href="gallery-4cols-filter.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li><a href="gallery-masonry.html">Masonry Grid</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/blog')}}">Blog</a>
                </li>
               
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>