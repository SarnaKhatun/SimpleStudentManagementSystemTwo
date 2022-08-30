@extends('admin.master')

@section('title')
    Manage Course
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">All Course Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Title</th>
                            <th>Course Fee</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Instructor Info</th>
                            <th>Course Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{$course->status == 0 ? 'bg-warning' : ''}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->end_date}}</td>
                                <td>
                                    {{$course->teacher->name}},
                                    {{$course->teacher->mobile}}
                                </td>
                                <td>{{$course->status == 0 ? 'Unpublished' : 'Published'}}</td>
                                <td>
                                    <a href="{{route('admin.course-detail', ['id' => $course->id])}}" class="btn btn-primary btn-sm ">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.course-status', ['id' => $course->id])}}" class="btn btn-success btn-sm ">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>

                                    {{--                                                                    <a href="{{route('course.delete', ['id' => $teacher->id])}}" class="btn btn-danger btn-sm {{$course->teacher_id == Session::get('teacher_id') ? '' : 'disabled'}}" onclick="return confirm('Are you sure want to delete this???')">--}}
                                    {{--                                                                        <i class="fa fa-trash"></i>--}}
                                    {{--                                                                    </a> --}}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

