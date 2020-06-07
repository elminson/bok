@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="index">Home</a>
                        <a href="about-us">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Mission Area =================-->
    <section class="mission_area">
        <div class="row m0">
            <div class="col-lg-6 p0">
                <div class="left_img"><img src="img/mission-1.jpg" alt=""></div>
            </div>
            <div class="col-lg-6 p0">
                <div class="mission_slider owl-carousel owl-loaded owl-drag disabled">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-840px, 0px, 0px); transition: all 0s ease 0s; width: 2940px;">

                            <div class="owl-item cloned" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 400px; margin-right: 20px;">
                                <div class="item">
                                    <div class="mission_text">
                                        <h4>Road to Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                    <div class="mission_text">
                                        <h4>About Our Mission</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-prev"><i class="lnr lnr-arrow-left"></i></div>
                    <div class="owl-next"><i class="lnr lnr-arrow-right"></i></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Mission Area =================-->

@endsection
