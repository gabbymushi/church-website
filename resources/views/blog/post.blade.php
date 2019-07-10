@extends('layouts.main')
@section('content')
 <!-- Start Nav Backed Header -->
 <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog-masonry.html">Blog</a></li>
            <li class="active">{{$post->title}}</li>
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
        <div class="col-md-8 col-sm-8">
          <h1>Blog</h1>
        </div>
        <div class="col-md-4 col-sm-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit convallis egestas rhoncus.</p>
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
              <div class="pull-right post-comments-count"> <a href="#comments"><i class="fa fa-comment"></i> 23</a> </div>
              <h2 class="post-title">{{$post->title}}</h2>
            </header>
            <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> Posted on {{date('jS F,Y',strtotime($post->created_at))}}</span> <span><i class="fa fa-archive"></i> Categories: <a href="#">Uncategorized</a></span></span>
              <div class="featured-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt=""> </div>
              {{$post->content}}
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>
              <h3>Vivamus convallis</h3>
              <p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
              </blockquote> -->
              <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>, <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a> </div>
            </article>
            <!-- <section class="post-comments" id="comments">
              <h3><i class="fa fa-comment"></i> Comments (4)</h3>
              <ol class="comments">
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                </li>
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                  <ul>
                    <li>
                      <div class="post-comment-block">
                        <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                        <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                        <h5>John Doe says</h5>
                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                        <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                      </div>
                    </li>
                    <li>
                      <div class="post-comment-block">
                        <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                        <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                        <h5>John Doe says</h5>
                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                        <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                </li>
              </ol>
            </section> -->
            <!-- <section class="post-comment-form">
              <h3><i class="fa fa-share"></i> Post a comment</h3>
              <form>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control input-lg" placeholder="Your name">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control input-lg" placeholder="Your email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                    </div>
                  </div>
                </div>
              </form>
            </section> -->
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