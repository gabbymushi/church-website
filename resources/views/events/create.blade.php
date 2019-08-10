@extends('admin.layouts.main')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">New Event</h5>
        <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="position-relative row form-group">
                <label for="examplePassword" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-10"><input name="start_date" id="start_date" placeholder="" type="date" class="form-control"></div>
            </div>
            <div class="position-relative row form-group">
                <label for="examplePassword" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-10"><input name="end_date" id="end_date" placeholder="" type="date" class="form-control"></div>
            </div>

            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10"><textarea name="content" id="content" class="form-control"></textarea></div>
            </div>
            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Event Category</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Featured Image</label>
                <div class="col-sm-10">
                    <input type="file" name="featured_image" class="form-control">
                </div>
            </div>
                      <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Attachment</label>
                     <div class="col-sm-10">
                         <input type="file" name="attachment" class="form-control">
                     </div>
                     </div>
                             
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 text-center">
                                                    <button class="btn btn-primary" type="submit">Save Event</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

@endsection