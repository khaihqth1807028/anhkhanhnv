@extends('layouts.app')

@section('content')
    <div id="box">
        <div id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about-box">
                            <h2>About us</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages andIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many</p>
                            <a href="Javascript:void(0)">Read more</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
                        <div class="about-box_img">
                            <figure><img src="images/about.jpg" alt="#" /></figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end abouts -->



        <!-- vegetable -->
        <div id="vegetable" class="vegetable">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div  class="titlepage">
                            <h2> Fresh <strong class="llow">vegetable</strong> </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                        <div class="vegetable_shop">
                            <h3>Best Vegetables Shop</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages andIt is a long established fact that a reader will be distracted </p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
                        <div class="vegetable_img">
                            <figure><img src="images/v1.jpg" alt="#"/></figure>
                            <span>01</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                        <div class="vegetable_img margin_top">
                            <figure><img src="images/v2.jpg" alt="#"/></figure>
                            <span>02</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end vegetable -->




        <!-- clients -->
        <div id="testimonial" class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>testimonial</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients_red">
            <div class="container">
                <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                        <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                        <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="testomonial_section">

                                <div class="full testimonial_cont">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                            <div class="testomonial_img">
                                                <figure><img src="images/tes.jpg" alt="#"/></figure>
                                                <i><img src="images/test_con.png" alt="#"/></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                            <div class="cross_inner">
                                                <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">

                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont ">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                            <div class="testomonial_img">
                                                <figure><img src="images/tes.jpg" alt="#"/></figure>
                                                <i><img src="images/test_con.png" alt="#"/></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                            <div class="cross_inner">
                                                <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <div id="testomonial" class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont ">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                            <div class="testomonial_img">
                                                <figure><img src="images/tes.jpg" alt="#"/></figure>
                                                <i><img src="images/test_con.png" alt="#"/></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                            <div class="cross_inner">
                                                <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- end clients -->




        <!-- contact -->
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Contact <strong class="llow">us</strong></h2>
                        </div>
                    </div>

                </div>
                <div class="white_color">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <form class="contact_bg">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send">Send</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end contact -->
    </div>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
