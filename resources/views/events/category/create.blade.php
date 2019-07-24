@extends('admin.layouts.main')
@section('content')

<div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">New Category Event</h5>
                                       <form method="post" action="{{route('events_category.store')}}">
                                       	{{csrf_field()}}
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10"><input name="name" id="name" placeholder="Event title" type="text" class="form-control"></div>
                                            </div>
                             
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 text-center">
                                                    <button class="btn btn-primary" type="submit">Save Category</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                         @endsection
