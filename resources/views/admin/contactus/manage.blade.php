
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">All Messages
                    	
                    </h5>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1; ?>
                            @foreach($messages as $message)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{str_limit($message->comments, 30)}}</td>
                                <td>
                              <a href="{{url('contactus/show/'.$message->id.'')}}"><div class="badge badge-primary">View &nbsp;<span class="fa fa-eye"></span></div></a>
                              <a href="{{url('contactus/'.$message->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                        {{$messages->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 