@extends('layouts.app')

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'home'])

        <div id="main" class="site-main margin-0">
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
                                                    <a href="{{ route('page', 'contacts') }}" target="_self" class="btn btn-secondary">{{ __('Contacts') }}</a>
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

                                            <p>I am developing software solutions based on PHP, Laravel framework. I am fully capable to solve all problems associated with backend functionality. It could be anything: API for an application, SPA or simple website - I got you! During the process in order to ensure good quality of the product I implement such principles as OOP (Object Oriented Programming), DDD (Domain-Drive Design) , Unit Testing, and tools such as Test Coverage Tools (PhpUnit), Code Quality Checkers (PHPSTAN), Code formatter (PINT).</p>
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
                                            <p>As my main speciality and area of interest is backend software solutions, I am also capable of managing frontend tasks. For simpler type of websites I am going with Alpine.js and Tailwind frameworks. For more complex functionality I tend to choose React.js and if there is a requirement I could do work on Vue.js/nuxt frameworks.</p>
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
{{--                                                <img src="{{ asset('/img/testimonials/testimonial-1.jpg') }}" alt="Testimonial"/>--}}
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p><span class="translated">(translated)</span> We did our companies logistics management system and it was a pleasure to work with Dovydas. Provided many valuable solutions and ideas not only from technology, but the project development side also.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Gintaras</h5>
                                                <p class="testimonial-firm">Sostinės verslo vizija</p>
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
                                </div>
                                <!-- /Testimonials -->

                                <div class="p-40"></div>

                                @include('partials.home.clients')

                                <div class="p-40"></div>

                            </div>
                        </div>

{{--                        <!-- Fun Facts -->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xs-12 col-sm-12">--}}
{{--                                <div class="block-title">--}}
{{--                                    <h2>Fun Facts</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-xs-12 col-sm-6 col-xl-3">--}}
{{--                                <a href="{{ route('page', ['page' => 'snake-game']) }}" class="lm-info-block gray-default">--}}

{{--                                    <svg fill="#007ced" width="52" height="52" version="1.1" id="lni_lni-game" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"--}}
{{--                                         y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">--}}
{{--                                            <g>--}}
{{--                                                <path d="M59.4,25.1c-1.9-1.9-4.6-3.1-7.3-3.1H34.2V6.6c0-1.2-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v15.5H12c-5.6,0-10.2,4.5-10.2,10.1v17.4--}}
{{--                                                    c0,5.6,4.6,10.1,10.2,10.1c5.1,0,9.3-3.7,10.1-8.4h20c0.8,4.8,5,8.5,10.1,8.5c5.6,0,10.2-4.5,10.2-10.1V32.2--}}
{{--                                                    C62.3,29.6,61.3,27.1,59.4,25.1z M57.7,49.6c0,3.1-2.5,5.6-5.7,5.6c-3.2,0-5.7-2.5-5.7-5.6c0-1.6-1.3-2.9-2.9-2.9H20.6--}}
{{--                                                    c-1.6,0-2.9,1.3-2.9,2.9c0,3-2.6,5.5-5.7,5.5c-3.2,0-5.7-2.5-5.7-5.6V32.2c0-3.1,2.6-5.6,5.7-5.6h40.1c1.5,0,3,0.6,4.1,1.7--}}
{{--                                                    c1,1,1.6,2.4,1.6,3.9V49.6z"/>--}}
{{--                                                <path d="M21.1,34.8h-2.2v-2.1c0-1.2-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v2.1h-2.2c-1.2,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h2.2v2.1--}}
{{--                                                    c0,1.2,1,2.3,2.3,2.3s2.3-1,2.3-2.3v-2.1h2.2c1.2,0,2.3-1,2.3-2.3S22.3,34.8,21.1,34.8z"/>--}}
{{--                                                <path d="M49,35c0.2,0,0.3,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.3-0.1,0.4-0.2s0.2-0.2,0.3-0.3c0.4-0.4,0.7-1,0.7-1.6--}}
{{--                                                    c0-0.6-0.2-1.2-0.7-1.6c-0.1-0.1-0.2-0.2-0.3-0.3s-0.3-0.1-0.4-0.2c-0.1-0.1-0.3-0.1-0.4-0.1c-0.7-0.1-1.5,0.1-2,0.6--}}
{{--                                                    c-0.4,0.4-0.7,1-0.7,1.6c0,0.6,0.2,1.2,0.7,1.6C47.8,34.7,48.4,35,49,35z"/>--}}
{{--                                                <path d="M46.2,35.5c-0.1-0.1-0.2-0.2-0.3-0.3s-0.3-0.1-0.4-0.2c-0.1-0.1-0.3-0.1-0.4-0.1c-0.7-0.1-1.5,0.1-2,0.6--}}
{{--                                                    c-0.4,0.4-0.7,1-0.7,1.6c0,0.6,0.2,1.2,0.7,1.6c0.2,0.2,0.5,0.4,0.7,0.5c0.3,0.1,0.6,0.2,0.9,0.2c0.2,0,0.3,0,0.4,0--}}
{{--                                                    c0.2,0,0.3-0.1,0.4-0.1c0.1,0,0.3-0.1,0.4-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.4-0.4,0.7-1,0.7-1.6C46.9,36.5,46.6,35.9,46.2,35.5z"/>--}}
{{--                                                <path d="M47.4,40.3c-0.4,0.4-0.7,1-0.7,1.6c0,0.6,0.2,1.2,0.7,1.6c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.3,0.2,0.4,0.2--}}
{{--                                                    c0.1,0.1,0.3,0.1,0.4,0.1c0.1,0,0.3,0,0.4,0c0.2,0,0.3,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.3-0.1,0.4-0.2--}}
{{--                                                    c0.1-0.1,0.2-0.2,0.3-0.3c0.4-0.4,0.7-1,0.7-1.6c0-0.6-0.2-1.2-0.7-1.6C49.8,39.4,48.3,39.4,47.4,40.3z"/>--}}
{{--                                                <path d="M55.4,36.2c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.2-0.3-0.3c-0.5-0.5-1.3-0.8-2-0.6c-0.1,0-0.3,0.1-0.4,0.1--}}
{{--                                                    c-0.1,0-0.3,0.1-0.4,0.2s-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.3-0.2,0.4c-0.1,0.1-0.1,0.3-0.1,0.4--}}
{{--                                                    c0,0.1,0,0.3,0,0.4c0,0.6,0.2,1.2,0.7,1.6c0.4,0.4,1,0.7,1.6,0.7c0.6,0,1.2-0.2,1.6-0.7c0.4-0.4,0.7-1,0.7-1.6c0-0.1,0-0.3,0-0.4--}}
{{--                                                    C55.5,36.5,55.5,36.4,55.4,36.2z"/>--}}
{{--                                            </g>--}}
{{--                                    </svg>--}}

{{--                                    <h4>Built a snake game</h4>--}}
{{--                                    <span class="lm-info-block-value lm-info-block-text"><span href="#">PLAY</span></span>--}}
{{--                                    <span class="lm-info-block-text"></span>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <div class="col-xs-12 col-sm-6 col-xl-3">--}}
{{--                                <div class="lm-info-block gray-default">--}}
{{--                                    <i class="linecons linecons-clock"></i>--}}
{{--                                    <h4>Working Days</h4>--}}
{{--                                    <span class="lm-info-block-value">{{ now()->diffInDays('2017-01-01') }}</span>--}}
{{--                                    <span class="lm-info-block-text"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-xs-12 col-sm-6 col-xl-3">--}}
{{--                                <div class="lm-info-block gray-default">--}}
{{--                                    <i class="linecons linecons-star"></i>--}}
{{--                                    <h4>Foosball Trophies Won</h4>--}}
{{--                                    <span class="lm-info-block-value">19</span>--}}
{{--                                    <span class="lm-info-block-text"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-xs-12 col-sm-6 col-xl-3">--}}
{{--                                <div class="lm-info-block gray-default">--}}
{{--                                    <i class="linecons linecons-cup"></i>--}}
{{--                                    <h4>Coffee Consumed</h4>--}}
{{--                                    <span class="lm-info-block-value">&#8734;</span>--}}
{{--                                    <span class="lm-info-block-text"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /Fun Facts -->--}}

{{--                        <div class="p-40"></div>--}}

                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@stop
