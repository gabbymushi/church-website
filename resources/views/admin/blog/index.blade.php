
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">All News
                    	<a href="/post/blog" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">Add News</a>

                    </h5>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1; ?>
                            @if(isset($news))
                            @foreach($news as $new)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$new->title}}</td>
                                <td>{!!$new->content!!}</td>
                                <td>
                              <a href="{{url('news/'.$new->id.'/edit')}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{url('news/'.$new->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                        {{$news->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 