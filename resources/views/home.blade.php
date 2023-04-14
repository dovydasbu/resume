@extends('layouts.app')

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'home'])

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">
                    <div id="content" class="page-content site-content single-post" role="main">
                        <!-- Home Page Top Part -->
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12">
                                <div class="home-content">
                                    <div class="row flex-v-align">

                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="home-photo">
                                                <div class="hp-inner" style="background-image: url({{ asset('img/profile.jpg') }});">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-7 col-lg-7">
                                            <div class="home-text hp-left">
                                                <div class="owl-carousel text-rotation">
                                                    <div class="item">
                                                        <h4>{{ __('Web Developer') }}</h4>
                                                    </div>

                                                    <div class="item">
                                                        <h4>{{ __('Based in Lithuania') }}</h4>
                                                    </div>

                                                    <div class="item">
                                                        <h4>{{ __('Ready to build something cool!') }}</h4>
                                                    </div>
                                                </div>

                                                <h1>Dovydas Bukauskas</h1>
                                                <p>{{ __('Developing all kinds of web and mobile applications, business management systems. Highly intereseted in architecture and backend solutions of developed software, nevertheless can manage frontend tasks with confidence.') }}</p>

                                                <div class="home-buttons">
                                                    <a href="{{ asset('files/Dovydas-Bukauskas-CV.pdf') }}" download class="btn btn-primary">{{ __('Download CV') }}</a>
                                                    <a href="{{ route('page', 'contacts') }}" target="_self" class="btn btn-secondary">{{ __('Contact') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Home Page Top Part -->

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="p-50"></div>

                                <div class="block-title">
                                    <h2>What I Do</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="info-list-w-icon">
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-settings"></i>
                                        </div>

                                        <div class="ci-text">
                                            <h4>Backend Development</h4>
                                            <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="info-list-w-icon">

                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-display"></i>
                                        </div>

                                        <div class="ci-text">
                                            <h4>Frontend Development</h4>
                                            <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Services -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="p-20"></div>

                                <!-- Testimonials -->
                                <div class="block-title">
                                    <h2>Testimonials</h2>
                                </div>

                                <div id="testimonials_1" class="testimonials owl-carousel" data-mobile-items="1" data-tablet-items="2" data-items="2">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="./img/testimonials/testimonial-1.jpg" alt="Billy Adams"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Billy Adams</h5>
                                                <p class="testimonial-firm">Rolling Thunder</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                    </div>
                                    <!-- End of Testimonial 1 -->

                                    <!-- Testimonial 2 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="./img/testimonials/testimonial-2.jpg" alt="Gary Johnson"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Gary Johnson</h5>
                                                <p class="testimonial-firm">Locost Accessories</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                    </div>
                                    <!-- End of Testimonial 2 -->

                                    <!-- End of Testimonial 3 -->
                                    <div class="testimonial-item">

                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="./img/testimonials/testimonial-3.jpg" alt="Daniel Pringle"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Daniel Pringle</h5>
                                                <p class="testimonial-firm">Sagebrush</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->

                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                                <!-- /Testimonials -->

                                <div class="p-40"></div>

                                @include('partials.home.clients')

                                <div class="p-40"></div>

                            </div>
                        </div>

                        <!-- Fun Facts -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h2>Fun Facts</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <div class="lm-info-block gray-default">
                                    <i class="linecons linecons-heart"></i>
                                    <h4>Happy Clients</h4>
                                    <span class="lm-info-block-value">578</span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3">
                                <div class="lm-info-block gray-default">
                                    <i class="linecons linecons-clock"></i>
                                    <h4>Working Days</h4>
                                    <span class="lm-info-block-value">{{ now()->diffInDays('2017-01-01') }}</span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 ">
                                <div class="lm-info-block gray-default">
                                    <i class="linecons linecons-star"></i>
                                    <h4>Awards Won</h4>
                                    <span class="lm-info-block-value">15</span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 ">
                                <div class="lm-info-block gray-default">
                                    <i class="linecons linecons-cup"></i>
                                    <h4>Coffee Consumed</h4>
                                    <span class="lm-info-block-value">&#8734;</span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                            </div>
                        </div>
                        <!-- /Fun Facts -->

                        <div class="p-40"></div>

                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@stop
