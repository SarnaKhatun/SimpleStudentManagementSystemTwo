@extends('website.master')

@section('title')
    Contact Page
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Contact With Us</h3>
                        <hr/>
                        <p>House # 420, Road #120, West Dhanmondhi, Dhaka-1209</p>
                        <p>Phone One : 01756989663</p>
                        <p>Phone Two : 01756986396</p>
                        <p>Contact Email : info@contact.com</p>
                        <p>Support Email : info@support.com</p>
                        <p>Fax No : 023430532</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Give Us Your Message</h3>
                        <hr/>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Your Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Send Message"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #c5e8ef">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.701717783493!2d90.39058642503682!3d23.752697238353026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8983f79fa27%3A0xeddafd73d038bc2f!2sKawran%20Bazar%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1660387980905!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
