@extends('admin.master')

@section('title')
    Edit Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Teacher Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('teacher.update', ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstName-input" class="col-sm-3">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$teacher->name}}" name="name" id="horizontal-firstName-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-designation-input" class="col-sm-3">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$teacher->designation}}" name="designation" id="horizontal-designation-input">
                                <span class="text-danger text-center">{{$errors->has('designation') ? $errors->first('designation') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" value="{{$teacher->email}}"  name="email" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" value="{{$teacher->password}}"  name="password" id="horizontal-password-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{$teacher->mobile}}"  name="mobile" id="horizontal-mobile-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" id="horizontal-address-input" cols="30" rows="5" class="form-control" >{{$teacher->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Teacher Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                                <img src="{{asset($teacher->image)}}" alt="" height="90px" width="90px">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="t" class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-outline-success px-5" value="Update Teacher Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
