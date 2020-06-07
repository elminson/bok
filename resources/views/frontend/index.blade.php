@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')


<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/slider/kids-9.jpg" alt="">
                <div class="slider_text_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7" >
                                <div class="slider_text">
                                    <h2>We Combine <br />Bank with Kids</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="banner_btn" href="#">Explore Us</a>
                                    <a class="banner_btn2" href="#">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"><img width="100%" src="img/slider/kids-2.jpg" alt="">
                <div class="slider_text_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_text">
                                    <h2>We Combine <br />Business with Finance</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="banner_btn" href="#">Explore Us</a>
                                    <a class="banner_btn2" href="#">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"><img src="img/slider/slider-1.jpg" alt="">
                <div class="slider_text_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_text">
                                    <h2>We Combine <br />Business with Finance</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="banner_btn" href="#">Explore Us</a>
                                    <a class="banner_btn2" href="#">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
{{--<example-component></example-component>--}}
<!--================Mission Area =================-->
<section class="mission_area">
    <div class="row m0">
        <div class="col-lg-6 p0">
            <div class="left_img"><img src="img/mission-3.jpg" alt=""></div>
        </div>
        <div class="col-lg-6 p0">
            <div class="mission_slider owl-carousel">
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
        </div>
    </div>
</section>
<!--================End Mission Area =================-->

<!--================Success Area =================-->
<section class="success_area">
    <div class="row m0">
        <div class="col-lg-6 p0">
            <div class="mission_text">
                <h4>Road to Success</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
            </div>
        </div>
        <div class="col-lg-6 p0">
            <div class="success_img">
                <img src="img/success-3.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="row m0 right_dir">
        <div class="col-lg-6 p0">
            <div class="success_img">
                <img src="img/success-4.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-6 p0">
            <div class="mission_text">
                <h4>Road to Success</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud.</p>
            </div>
        </div>
    </div>
</section>
<!--================End Success Area =================-->

<!--================Project Area =================-->
<section class="project_area">
    <div class="row m0">
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-1.jpg" alt="">
                <div class="hover_text">
                    <h4>The <br />App</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-2.jpg" alt="">
                <div class="hover_text">
                    <h4>Lorem <br />Ipsum</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-3.jpg" alt="">
                <div class="hover_text">
                    <h4>Lorem <br />Ipsum</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-4.jpg" alt="">
                <div class="hover_text">
                    <h4>Lorem <br />Ipsum</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-5.jpg" alt="">
                <div class="hover_text">
                    <h4>Lorem <br />Ipsum</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p0">
            <div class="project_item">
                <img src="img/project/project-6.jpg" alt="">
                <div class="hover_text">
                    <h4>Lorem <br />Ipsum</h4>
                    <div class="cat">
                        <a href="#">Lorem </a>
                        <a href="#">ipsum</a>
                    </div>
                    <a class="main_btn" href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Project Area =================-->

<!--================Future Area =================-->
<section class="team_area">
    <div class="team_slider owl-carousel">
        <div class="item">
            <div class="team_item">
                <img src="img/team/team-5.jpg" alt="">
                <div class="hover_text">
                    <a href="#"><h4>Future Leader</h4></a>
                    <p>Andrea Johnson</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team_item">
                <img src="img/team/team-6.jpg" alt="">
                <div class="hover_text">
                    <a href="#"><h4>Plastic Artist</h4></a>
                    <p>Mila Dores</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team_item">
                <img src="img/team/team-7.jpg" alt="">
                <div class="hover_text">
                    <a href="#"><h4>English Teacher</h4></a>
                    <p>Ethan Hopkins</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team_item">
                <img src="img/team/team-8.jpg" alt="">
                <div class="hover_text">
                    <a href="#"><h4>Makeup Artist</h4></a>
                    <p>Maud Graham</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Future Area =================-->

<!--================Project Details Area =================-->
<section class="project_know_area p_120">
    <div class="container">
        <div class="project_know_inner text-center">
            <h3>Teach then How to manage money!</h3>
            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck</p>
            <a class="white_btn" href="#">Create an Account for your children</a>
        </div>
    </div>
</section>
<!--================End Project Details Area =================-->

<!--================Home Blog Area =================-->
<section class="home_blog_area">
    <div class="row m0">
        <div class="col-lg-3 p0">
            <div class="h_blog_img">
                <img src="img/home-blog/h-blog-1.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_text">
                <a class="cat" href="#">5 June, 2020  |  By Mark Wiens</a>
                <a href="#"><h4>Our Team will help you anytime</h4></a>
                <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops.</p>
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_img">
                <img src="img/home-blog/h-blog-2.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_text">
                <a class="cat" href="#">5 June, 2020  |  By Mark Wiens</a>
                <a href="#"><h4>Always creating new solutions</h4></a>
                <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops.</p>
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_text">
                <a class="cat" href="#">5 June, 2020  |  By Mark Wiens</a>
                <a href="#"><h4>The best Customer service</h4></a>
                <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops.</p>
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_img">
                <img src="img/home-blog/h-blog-3.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_text">
                <a class="cat" href="#">5 June, 2020 |  By Mark Wiens</a>
                <a href="#"><h4>Call us when you need us</h4></a>
                <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops.</p>
            </div>
        </div>
        <div class="col-lg-3 p0">
            <div class="h_blog_img">
                <img src="img/home-blog/h-blog-4.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Home Blog Area =================-->
@endsection
