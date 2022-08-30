@extends('admin.master')

@section('title')
    Add User
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add User Form</h4>
                    <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                    <form action="{{route('user.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstName-input" class="col-sm-3">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstName-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="horizontal-password-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Teacher Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="t" class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-outline-success px-5" value="Create New User">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
