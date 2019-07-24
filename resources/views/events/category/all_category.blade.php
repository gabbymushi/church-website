
@extends('admin.layouts.main')

@section('content')
<div class="row">
        <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                      <h5 class="card-title">All Category Events
                      <a href="{{route('event_category.create')}}" style="margin-bottom: 20px" class="btn btn-primary btn-md pull-right">New Category</a>

                    </h5>

                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; ?>
                            @foreach($categories as $category)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$category->name}}</td>
                                <td>
                              <a href=""><div class="badge badge-primary">Edit</div></a>
                              <a href="{{route('event_category.delete',['id'=>$category->id])}}"><div class="badge badge-danger">Delete</div></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                         
                    </div>
                    
                    <div style="margin-left: 40%;" class="col-md-12 text-center">
                             {{$categories->links()}}
                   </div>

                </div>
            </div>
</div>
@endsection 