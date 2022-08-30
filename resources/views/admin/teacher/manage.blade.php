@extends('admin.master')

@section('title')
    Manage Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">All Teacher Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->designation}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->mobile}}</td>
                            <td><img src="{{asset($teacher->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                            <td>
                                <a href="{{route('teacher.edit', ['id' => $teacher->id])}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

{{--                                <a href="{{route('teacher.delete', ['id' => $teacher->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this???')">--}}
{{--                                    <i class="fa fa-trash"></i>--}}
{{--                                </a> --}}
                                <a href="{{route('teacher.delete', ['id' => $teacher->id])}}" class="btn btn-danger btn-sm" onclick="deleteTeacher({{$teacher->id}})">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('teacher.delete', ['id' => $teacher->id])}}" method="post" id="deleteTo{{$teacher->id}}">
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

