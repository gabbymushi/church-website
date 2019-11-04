
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">All epartments
                    	<a href="{{route('jimbo.create')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Department</a>

                    </h5>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1; ?>
                            @foreach($departments as $department)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$department->name}}</td>
                                <td>{{$department->description}}</td>
                                <td>
                              <a href="{{url('department/'.$department->id.'/edit')}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{url('department/'.$department->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
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