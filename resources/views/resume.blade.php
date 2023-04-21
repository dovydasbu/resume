@extends('layouts.app', [
    'title' => __('Resume')
])

@section('content')
    <div id="page_container" class="page-container" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'resume'])

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">

                    <div class="page-title">
                        <h1>Resume</h1>
                        <div class="page-subtitle">
                            <h4> 6 Years of Experience</h4>
                        </div>
                    </div>

                    <div id="content" class="page-content site-content single-post" role="main">
                        <div class="row">

                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Education</h2>
                                </div>

                                <div id="timeline_1" class="timeline clearfix">
                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2016 - 2020</h5>
                                        <span class="item-company">University of Vilnius</span>
                                        <h4 class="item-title">Bachelors degree</h4>
                                        <p>Finished university while developing a real estate evaluation app with Citynow client.</p>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2016</h5>
                                        <span class="item-company">3W academy</span>
                                        <h4 class="item-title">Web development courses</h4>
                                        <p>3 months intensive web development course after which I got a good kickstart for web development career.</p>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2012-2016</h5>
                                        <span class="item-company">Vilnius Žirmūnai gymnasium</span>
                                        <h4 class="item-title">High School</h4>
                                        <p>Finished top 5 gymnasium in whole Lithuania.</p>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Experience</h2>
                                </div>

                                <div id="timeline_2" class="timeline clearfix">
                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period current">2021 - Current</h5>
                                        <span class="item-company">Kinfirm</span>
                                        <h4 class="item-title">Web Developer</h4>
                                        <p>Developed B2B principle based software in order to help clients organize companies work with a centralized software units.</p>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2018 - 2021</h5>
                                        <span class="item-company">Digital AZ</span>
                                        <h4 class="item-title">Web Developer</h4>
                                        <p>Mainly worked with laravel and wordpress. Time to time front-end and mobile development tasks were taken care of.</p>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2017 - 2018</h5>
                                        <span class="item-company">Dizaino arkliukas</span>
                                        <h4 class="item-title">Junior Web Developer</h4>
                                        <p>Developed websites mainly on wordpress, had a touch with laravel projects. Needed a lot of out of the box thinking in order to adapt wordpress for custom solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">
                                <div class="p-20"></div>

                                <div class="block-title">
                                    <h2>Certificates</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-6 ">
                                <div href="#" class="">
                                    <div class="certificate-item clearfix">
                                        <div class="certi-logo">
                                            <img src="{{ asset('/img/courses/3w_academy.jpg') }}" alt="logo">
                                        </div>

                                        <div class="certi-content">
                                            <div class="certi-title">
                                                <h4>3W Academy</h4>
                                            </div>

                                            <div class="certi-id">
                                                <span>Web Technologies</span>
                                            </div>
                                            <div class="certi-date">
                                                <span>August 2016</span>
                                            </div>

                                            <div class="certi-company">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">
                                <div class="p-40"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Frontend Skills</h2>
                                </div>

                                <div id="skills_1" class="skills-info skills-first-style">
                                    <!-- Skill 1 -->
                                    <div class="clearfix">
                                        <h4>React.js</h4>
                                        <div class="skill-value">80%</div>
                                    </div>

                                    <div id="skill_1" data-value="80" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 1 -->

                                    <!-- Skill 2 -->
                                    <div class="clearfix">
                                        <h4>Vue.js</h4>
                                        <div class="skill-value">70%</div>
                                    </div>

                                    <div id="skill_2" data-value="70" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 2 -->

                                    <!-- Skill 3 -->
                                    <div class="clearfix">
                                        <h4>React Native</h4>
                                        <div class="skill-value">65%</div>
                                    </div>
                                    <div id="skill_4" data-value="65" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill 3 -->

                                    <!-- Skill 4 -->
                                    <div class="clearfix">
                                        <h4>Alpine.js</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div id="skill_3" data-value="95" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 4 -->
                                </div>

                            </div>


                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Backend Skills</h2>
                                </div>

                                <div id="skills_2" class="skills-info skills-first-style">
                                    <!-- Skill 5 -->
                                    <div class="clearfix">
                                        <h4>PHP</h4>
                                        <div class="skill-value">90%</div>
                                    </div>

                                    <div id="skill_5" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 5 -->

                                    <!-- Skill 6 -->
                                    <div class="clearfix">
                                        <h4>Laravel</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_6" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 6 -->

                                    <!-- Skill 7 -->
                                    <div class="clearfix">
                                        <h4>MySQL</h4>
                                        <div class="skill-value">75%</div>
                                    </div>
                                    <div id="skill_7" data-value="75" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 7 -->

                                    <!-- Skill 8 -->
                                    <div class="clearfix">
                                        <h4>GIT</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_8" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 8 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@stop
