@extends('admin.master')

@section('title')
    Manage Student
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">All Student Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->mobile}}</td>
                                <td><img src="{{asset($student->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                                <td>{{$student->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('admin.student-update-status', ['id' => $student->id])}}" class="btn {{$student->status ==1 ? 'btn-success' : 'btn-danger'}} btn-sm" >
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
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

