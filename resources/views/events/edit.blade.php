@extends('dashboard.layouts.main')
@section('content')

<div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Edit Event</h5>
                                       <form method="post" action="{{route('event.update',['id'=>$event->id])}}">
                                       	{{csrf_field()}}
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10"><input name="title" id="title" placeholder="Event title" type="text" class="form-control" value="{{$event->title}}"></div>
                                            </div>
                                            <div class="position-relative row form-group">
                                            	<label for="examplePassword" class="col-sm-2 col-form-label">Start Date</label>
                                                <div class="col-sm-10"><input name="start_date" id="start_date" placeholder="" type="date" class="form-control"
                                                    value="{{$event->start_date}}"></div>
                                            </div>
                                         <div class="position-relative row form-group">
                                            	<label for="examplePassword" class="col-sm-2 col-form-label">End Date</label>
                                                <div class="col-sm-10"><input name="end_date" id="end_date" placeholder="" type="date" class="form-control"
                                                    value="{{$event->end_date}}"></div>
                                            </div>
                                    
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content</label>
                                                <div class="col-sm-10"><textarea name="content" id="content" class="form-control">
                                                    {{$event->content}}
                                                </textarea></div>
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
