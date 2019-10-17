@extends('admin.layouts.main')
@section('content')
@if(count($errors) > 0)
 <div class="alert alert-danger fade show" role="alert">
     <ul class="item-group">
        @foreach($errors->all() as $error)
        <li class="item-group-list">{{$error}}</li>
         @endforeach
     </ul>
 </div>
 @endif
<div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">New Staff</h5>
                <form method="post" action="{{route('store.staff')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                     <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                        <select class="form-control" name="designation" id="">
                         <option value="askofu">Bishop</option>
                         <option value="katibu-mkuu">Mr.</option>
                         <option value="mchungaji">Pastor</option>
                          <option value="Mwinjilisti">Miss</option>
                          <option value="Mwinjilisti">Mrs</option>
                          </select>
                            </div>
                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">First Name<span class="text-danger">*</span></label>
                                                <div class="col-sm-10"><input name="fname" id="title" value="{{old('fname')}}" placeholder="First Name" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group">
                                                <label for="middlename" class="col-sm-2 col-form-label">Middle Name</label>
                                                <div class="col-sm-10"><input name="mname" id="mname" value="{{old('mname')}}" placeholder="middle Name" type="text" class="form-control"></div>
                                            </div>
                                         <div class="position-relative row form-group">
                                                <label for="lastname" class="col-sm-2 col-form-label">Last Name<span class="text-danger">*</span></label>
                                                <div class="col-sm-10"><input name="lname" id="lname" value="{{old('lname')}}" placeholder="Last Name" type="text" class="form-control"></div>
                                            </div>
             <div class="position-relative row form-group">
                <label for="designation" class="col-sm-2 col-form-label">Designation<span class="text-danger">*</span></label>
                 <div class="col-sm-10">
                    <select class="form-control" name="designation" id="">
                        <option value="askofu">Askofu</option>
                        <option value="katibu-mkuu">Katibu Mkuu</option>
                        <option value="mchungaji">Mchungaji</option>
                        <option value="Mwinjilisti">Mwinjilisti</option>
                    </select>
                </div>
                    </div>
                                           
                                           <div class="position-relative row form-group">
                                                <label for="designation" class="col-sm-2 col-form-label">Phone 1<span class="text-danger">*</span></label>
                                                <div class="col-sm-10"><input name="phone1" id="phone1" value="{{old('phone1')}}"  placeholder="Phone 1" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group">
                                                <label for="designation" class="col-sm-2 col-form-label">Phone 2</label>
                                                <div class="col-sm-10"><input name="phone2" id="phone2" value="{{old('phone2')}}" placeholder="Phone 2" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10"><textarea name="description" id="description" value="{{old('description')}}" class="form-control"></textarea></div>
                                            </div>
                                               <div class="position-relative row form-group">
                                                <label for="instagram" class="col-sm-2 col-form-label">Photo</label>
                                                <div class="col-sm-10"><input name="photo" id="photo" value="{{old('photo')}}"  type="file" class="form-control"></div>
                                            </div>
                             
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 text-center">
                                                    <button class="btn btn-primary" type="submit">Save Staff</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                         @endsection
