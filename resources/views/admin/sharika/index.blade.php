
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    	<h5 class="card-title">Sharika
                    	<a href="{{route('sharika.create')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Sharika</a>

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
                            @foreach($sharika as $usharika)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$usharika->name}}</td>
                                <td>{{$usharika->description}}</td>
                                <td>
                              <a href="{{url('usharika/'.$usharika->id.'/edit')}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{url('usharika/'.$usharika->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                        {{$sharika->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 