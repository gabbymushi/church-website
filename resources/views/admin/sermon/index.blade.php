
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">All Sermons
                    	<a href="{{route('sermon.create')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Sermon</a>

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
                            @foreach($sermons as $sermon)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$sermon->title}}</td>
                                <td>{{$sermon->content}}</td>
                                <td>
                              <a href="{{url('sermon/'.$sermon->id.'/edit')}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{url('sermon/'.$sermon->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                   </div>

                </div>
            </div>
</div>
@endsection 