
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="row" style="padding: 10px;">
                            <h5 class="card-title">Message from {{$message->name}}</h5>
                        <a href="{{route('contactus.manage')}}" style="margin-left: 600px;"><button class="btn btn-success pull-left"><-Back</button></a>
                        </div>
                    	
                    <div class="message">
                        <p>
                            {{$message->comments}}
                        </p>
                    </div>
                       
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                        
                   </div>

                </div>
            </div>
</div>
@endsection 