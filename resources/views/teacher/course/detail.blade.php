@extends('teacher.master')

@section('title')
    Manage Course
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">Course Detail Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Course Id</th>
                            <td>{{$course->id}}</td>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{$course->title}}</td>
                        </tr>
                        <tr>
                            <th>Course Start Date</th>
                            <td>{{$course->start_date}}</td>
                        </tr>
                        <tr>
                            <th>Course End Date</th>
                            <td>{{$course->end_date}}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{$course->fee}}</td>
                        </tr>
                        <tr>
                            <th>Course Short Description</th>
                            <td>{{$course->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Course Long Description</th>
{{--                            <td>{{$course->long_description}}</td>--}}
                            <td>{!! $course->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td>
                                <img src="{{asset($course->image)}}" alt="" height="90px" width="90">
                            </td>
                        </tr>
                        <tr>
                            <th>Course Publication Status</th>
                            <td>{{$course->status == 0 ? 'Course is Unpublished' : 'Course is Published'}}</td>
                        </tr>
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

