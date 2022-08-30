@extends('website.master')

@section('title')
    {{Session::get('student_name')}} Courses
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">My Profile</a>
                            <a href="{{route('student.courses')}}" class="list-group-item">My Course</a>
                            <a href="" class="list-group-item">My Study</a>
                            <a href="" class="list-group-item">My Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h3 class="text-center">My Enrolled Courses</h3>
                        <hr/>
                        <div>
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title</th>
                                    <th>Teacher Info</th>
                                    <th>Course Starting Date</th>
                                    <th>Course Ending Date</th>
                                    <th>Course Fee</th>
                                    <th>Course Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrolledCourses as $enrolledCourse)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$enrolledCourse->course->title}}</td>
                                    <td>{{$enrolledCourse->course->teacher->name}}</td>
                                    <td>{{$enrolledCourse->course->start_date}}</td>
                                    <td>{{$enrolledCourse->course->end_date}}</td>
                                    <td>{{$enrolledCourse->course->fee}}</td>
                                    <td>{{$enrolledCourse->enroll_status}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
