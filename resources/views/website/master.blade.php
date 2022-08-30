<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
            <li><a href="{{route('course')}}" class="nav-link">All Course</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('sarna.index')}}" class="nav-link">sarn</a></li>
            @if(Session::get('student_id'))
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('student_name')}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('student.dashboard')}}" class="dropdown-item">Dashboard</a></li>
                        <li><a href="{{route('student.logout')}}" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
            @else
            <li><a href="{{route('login.registration')}}" class="nav-link">Login / Registration</a></li>
            @endif
        </ul>
    </div>
</nav>

@yield('content')


<footer>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Why Choice Us</h4>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos officia, quos? Adipisci atque corporis dolore, ea esse est iure nobis odit, quaerat quibusdam quos rem, repellendus repudiandae similique sit sunt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Popular Course</h4>
                        <hr/>
                        <ul class="nav flex-column">
                            <li><a href="" class="nav-link text-dark">Web Development</a></li>
                            <li><a href="" class="nav-link text-dark">Android Development</a></li>
                            <li><a href="" class="nav-link text-dark">Master in English</a></li>
                            <li><a href="" class="nav-link text-dark">Master in Higher Math</a></li>
                            <li><a href="" class="nav-link text-dark">Master in Physics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4 class="text-center">Contact With Us</h4>
                        <hr/>
                        <p>
                            House # 420, Road #120, West Dhanmondhi, Dhaka-1209 <br/>
                            Email: info@example.com <br/>
                            Phone: 01756969863
                        </p>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-github-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-google-plus-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-2x fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white mb-0">Design & Developed By Sarna</p>
                </div>
            </div>
        </div>
    </section>
</footer>


<script src="{{asset('/')}}website/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.min.js"></script>
</body>
</html>
