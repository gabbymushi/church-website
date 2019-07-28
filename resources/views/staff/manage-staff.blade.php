
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">All Staff
                        <a href="{{route('create.staff')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Staff</a>

                    </h5>

                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                            @foreach($staffs as $staff)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$staff->fname.' '.$staff->lname}}</td>
                                <td>{{$staff->designation}}</td>
                                <td>{{$staff->phone1}}</td>
                                <td>
                              <a href="{{route('staff.edit',['id'=>$staff->id])}}"><div class="badge badge-primary">Edit</div></a>
                              <a href="{{route('staff.destroy',['id'=>$staff->id])}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                             {{$staffs->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 