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
            <div class="featured-image">
              @if(!empty($post->files))
              <img src="{{asset('assets/images/blog/'.$post->files[0]['name'])}}" alt="" class="img-thumbnail">
              @else <p>No image</p>
              @endif
            </div>
            {!!$post->content!!}
            <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>, <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a> </div>
          </article>
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
            <div class="tag-cloud">
              <a href="#">Faith</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection