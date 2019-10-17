@extends('admin.layouts.main')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>Mitaa
                <div class="page-title-subheading">Add Mtaa
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Back
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Controls Types</h5> -->
                        <form method="POST" action="/mtaa/store" class="" enctype="multipart/form-data">
                            @csrf
                            <div class="position-relative form-group">
                                <label for="name" class="">Name</label>
                                <input name="name" id="name" placeholder="Name" type="text" class="form-control">
                                @if($errors->has('name'))
                                <p class="required1">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <!-- <div class="position-relative form-group">
                                <label for="title" class="">Cover Photo</label> 
                                <input name="picture" id="picture" placeholder="Cover Photo" type="file" class="form-control">
                            </div>
             -->
                            <div class="position-relative form-group">
                                <label for="description" class="">Description </label>
                                <textarea name="description" id="description" class="form-control" required="required">
                                </textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Sharika </label>
                                <select class="form-control" name="sharika_id" id="sharika_id">
                                    @if(isset($sharika))
                                    @foreach($sharika as $usharika)
                                    <option value="{{$usharika->id}}">{{$usharika->name}}</option>
                                    @endforeach
                                    @else
                                    <option value="">Please Create Sharika first</option>
                                    @endif
                                  
                                </select>
                            </div>
                            <button class="mt-1 btn btn-primary">Create Mtaa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection