
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
                                
                                <th>Subscription Email</th>
                                
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1; ?>
                            @foreach($subscriptions as $subscription)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$subscription->email}}</td>
                                <td>
                            
                              <a href="{{url('subscription/'.$subscription->id.'/delete')}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                        {{$subscriptions->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 