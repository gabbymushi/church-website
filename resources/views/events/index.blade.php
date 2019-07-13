
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">All Events
                    	<a href="{{route('event.create')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Events</a>

                    </h5>

                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1; ?>
                            @foreach($events as $event)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$event->title}}</td>
                                <td>{{$event->start_date}}</td>
                                <td>{{$event->end_date}}</td>
                                <td>
                              <a href="{{route('event.edit',['id'=>$event->id])}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{route('event.delete',['id'=>$event->id])}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                             {{$events->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 