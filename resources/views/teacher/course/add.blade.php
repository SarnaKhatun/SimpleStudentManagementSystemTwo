@extends('teacher.master')

@section('title')
    Add Course
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('course.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstName-input" class="col-sm-3">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="horizontal-firstName-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="start_date" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-end-input" class="col-sm-3">Ending Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="end_date" id="horizontal-end-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="fee" id="horizontal-mobile-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="short_description" id="horizontal-address-input" cols="30" rows="5" class="form-control" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-long-input" class="col-sm-3">Long Description</label>
                            <div class="col-sm-9">
                                <textarea name="long_description" id="horizontal-long-input" cols="30" rows="5" class="form-control summernote" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Course Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="t" class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-outline-success px-5" value="Create New Course">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
