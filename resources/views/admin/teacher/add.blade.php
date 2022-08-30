@extends('admin.master')

@section('title')
    Add Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Teacher Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('teacher.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstName-input" class="col-sm-3">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstName-input">
                                <span class="text-danger text-center">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-designation-input" class="col-sm-3">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="designation" id="horizontal-designation-input">
                                <span class="text-danger text-center">{{$errors->has('designation') ? $errors->first('designation') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="horizontal-email-input">
                                <span class="text-danger text-center">{{$errors->has('email') ? $errors->first('email') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="horizontal-password-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="mobile" id="horizontal-mobile-input">
                                <span class="text-danger text-center">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" id="horizontal-address-input" cols="30" rows="5" class="form-control" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Teacher Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                                <span class="text-danger text-center">{{$errors->has('image') ? $errors->first('image') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="t" class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-outline-success px-5" value="Create New Teacher">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
