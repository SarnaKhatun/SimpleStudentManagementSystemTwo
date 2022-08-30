@extends('teacher.master')

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
                            <th>Image</th>
                            <th>Course Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->end_date}}</td>
                                <td><img src="{{asset($course->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                                <td>{{$course->status == 0 ? 'Course is Unpublished' : 'Course is Published'}}</td>
                                <td>
                                    <a href="{{route('course.detail', ['id' => $course->id])}}" class="btn btn-primary btn-sm {{$course->status == 0 ? '' : 'disabled'}} {{$course->teacher_id == Session::get('teacher_id') ? '' : 'disabled'}}">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-success btn-sm {{$course->status == 0 ? '' : 'disabled'}} {{$course->teacher_id == Session::get('teacher_id') ? '' : 'disabled'}}">
                                        <i class="fa fa-edit"></i>
                                    </a>

{{--                                                                    <a href="{{route('course.delete', ['id' => $teacher->id])}}" class="btn btn-danger btn-sm {{$course->teacher_id == Session::get('teacher_id') ? '' : 'disabled'}}" onclick="return confirm('Are you sure want to delete this???')">--}}
{{--                                                                        <i class="fa fa-trash"></i>--}}
{{--                                                                    </a> --}}
                                    <a href="{{route('course.delete', ['id' => $course->id])}}" class="btn btn-danger btn-sm {{$course->status == 0 ? '' : 'disabled'}} {{$course->teacher_id == Session::get('teacher_id') ? '' : 'disabled'}}" onclick="deleteTeacher({{$course->id}})">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('course.delete', ['id' => $course->id])}}" method="post" id="deleteTo{{$course->id}}">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteTeacher(id) {
            event.preventDefault();
            var teacher = confirm('Are you sure');
            if (teacher)
            {
                document.getElementById('deleteTo'+id).submit();
            }
        }
    </script>
@endsection

