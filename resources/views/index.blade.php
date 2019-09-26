@extends('layouts.app-template')

@section('content')

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">

{{--                           @foreach($companies as $company)--}}
{{--                            <img src="{{'/images/logos/'.$company->logo}}" alt="" title="#slider-direction-1"  width="800px" height="400px" />--}}
{{--                            @endforeach--}}
                <img src="{{asset('images/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
                <img src="{{asset('images/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
            </div>


        <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">The Best Business Information </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">The Best business Information </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- our-skill-area start -->
    <div class="our-skill-area fix hidden-sm">
        <div class="test-overly"></div>
        <div class="skill-bg area-padding-2">
            <div class="container">
                <!-- section-heading end -->
                <div class="row">
                    <div class="skill-text">
                        <!-- single-skill start -->
                        @foreach($skills as $skill)
                        <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                            <div class="single-skill">
                                <div class="progress-circular">
                                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                                    <h3 class="progress-h4">{{$skill->name}}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single-skill end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-skill-area end -->

    <!-- Start reviews Area -->
    <div class="reviews-area hidden-xs">
        <div class="work-us">
            <div class="work-left-text">
                <a href="#">
                    <img src="img/about/2.jpg" alt="">
                </a>
            </div>
            <div class="work-right-text text-center">
                <h2>working with us</h2>
                <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
                <a href="#contact" class="ready-btn">Contact us</a>
            </div>
        </div>
    </div>
    <!-- End reviews Area -->

    <!-- Start portfolio Area -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Portfolio -page -->
                <div class="awesome-project-1 fix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-menu ">
                            <ul class="project-menu">
                                <li>
                                    <a href="#" class="active" data-filter="*">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".development">Development</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".design">Design</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".photo">Photoshop</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="awesome-project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                                            <h4>Business City</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">
                                            <h4>Blue Sea</h4>
                                            <span>Photosho</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">
                                            <h4>Beautiful Nature</h4>
                                            <span>Web Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/4.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/4.jpg">
                                            <h4>Creative Team</h4>
                                            <span>Web design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/5.jpg" alt="" /></a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/5.jpg">
                                            <h4>Beautiful Flower</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/portfolio/6.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpg">
                                            <h4>Night Hill</h4>
                                            <span>Photoshop</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
            </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->



@endsection
