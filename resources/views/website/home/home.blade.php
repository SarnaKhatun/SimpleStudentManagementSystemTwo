@extends('website.master')
@section('title')
    Home Page
@endsection
@section('content')
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="heroSlider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}website/img/1.jfif" alt="" class="w-100 h-550"/>
                <div class="carousel-caption">
                    <h3>Web development master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aspernatur distinctio doloremque, eaque inventore iure molestias numquam odit omnis recusandae voluptas? Deleniti illo itaque laudantium molestias natus. Dolore, placeat!</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/2.jfif" alt="" class="w-100 h-550"/>
                <div class="carousel-caption">
                    <h3>Android App development master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aspernatur distinctio doloremque, eaque inventore iure molestias numquam odit omnis recusandae voluptas? Deleniti illo itaque laudantium molestias natus. Dolore, placeat!</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/3.jfif" alt="" class="w-100 h-550"/>
                <div class="carousel-caption text-secondary">
                    <h3>Master in Physics</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aspernatur distinctio doloremque, eaque inventore iure molestias numquam odit omnis recusandae voluptas? Deleniti illo itaque laudantium molestias natus. Dolore, placeat!</p>
                    <a href="" class="btn btn-outline-success">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center">All Latest Course</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{asset($course->image)}}" alt="" class="h-250">
                        <div class="card-body">
                            <h5><a href="{{route('website.course-detail', ['id' => $course->id])}}" class="text-decoration-none text-muted">{{$course->title}}</a></h5>
                            <p>Course Fee: Tk. {{$course->fee}}</p>
                            <hr/>
                            <a href="{{route('website.course-detail', ['id' => $course->id])}}" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid bg-danger py-2">
            <h1 class="text-white text-center">Our Instructor Info</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{asset($teacher->image)}}" alt="" class="h-250">
                        <div class="card-body">
                            <h5>{{$teacher->name}}</h5>
                            <p>{{$teacher->designation}}</p>
                            <hr/>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-github-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
