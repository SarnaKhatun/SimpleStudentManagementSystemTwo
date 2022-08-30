@extends('admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">All User Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <table id="dataTable" class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><img src="{{asset($user->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                                <td>
                                    <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    {{--                                <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this???')">--}}
                                    {{--                                    <i class="fa fa-trash"></i>--}}
                                    {{--                                </a> --}}
                                    <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="deleteUser({{$user->id}})">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('user.delete', ['id' => $user->id])}}" method="post" id="deleteTo{{$user->id}}">
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
        function deleteUser(id) {
            event.preventDefault();
            var user = confirm('Are you sure');
            if (user)
            {
                document.getElementById('deleteTo'+id).submit();
            }
        }
    </script>
@endsection

