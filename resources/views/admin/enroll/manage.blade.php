@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">All Enroll Student Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Info</th>
                            <th>Teacher Info</th>
                            <th>Student Info</th>
                            <th>Starting Date</th>
                            <th>Enroll Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$enroll->course->title.'(Tk. '.$enroll->course->fee.')'}}</td>
                                <td>{{$enroll->course->teacher->name.'('.$enroll->course->teacher->mobile.')'}}</td>
                                <td>{{isset($enroll->student->name) ? $enroll->student->name.'('.$enroll->student->mobile.')' : ''}}</td>
                                <td>{{$enroll->course->start_date}}</td>
                                <td>{{$enroll->enroll_status }}</td>
                                <td>
                                    <a href="{{route('admin.enroll-update-status', ['id' => $enroll->id])}}" class="btn {{$enroll->enroll_status =='Complete' ? 'btn-success disabled' : 'btn-danger '}} btn-sm" >
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

