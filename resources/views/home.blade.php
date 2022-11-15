@extends('layouts.app')

@section('content')
    <div id="welcome-block">
        <h1 class="welcome-block-title">Hello, I'm <span class="name">Dovydas Bukauskas</span>. <br> I am a full-stack web developer.</h1>

        <div class="arrow-wrap">
            <a href="#introduction" class="arrow">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path></svg>
            </a>
        </div>
    </div>

    <div id="introduction">
        <div class="container">
            <h2 class="introduction-title">Abuot me</h2>

            <div class="introduction-content">
                <div class="introduction-image">
                    <img src="{{ asset('/images/me.jpg') }}" alt="">
                </div>

                <div class="introduction-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad excepturi, id molestiae placeat repudiandae similique! Amet distinctio repudiandae voluptate.
                </div>
            </div>
        </div>
    </div>

    <div id="skills">
        <div class="container">
            <div class="skills-columns-wrap">
                <div class="skills-column">
                    <h3 class="skills-column-title">Backend skills</h3>

                    <div class="skills-list">
                        <p class="skills-list-item">PHP</p>
                        <p class="skills-list-item">Laravel</p>
                        <p class="skills-list-item">Symfony</p>
                    </div>
                </div>

                <div class="skills-column">
                    <h3 class="skills-column-title">Frontend skills</h3>

                    <div class="skills-list">
                        <p class="skills-list-item">React.js</p>
                        <p class="skills-list-item">Vue.js</p>
                        <p class="skills-list-item">Javascript</p>
                        <p class="skills-list-item">CSS3</p>
                        <p class="skills-list-item">HTML</p>
                    </div>
                </div>

                <div class="skills-column">
                    <h3 class="skills-column-title">Daily used skills</h3>

                    <div class="skills-list">
                        <p class="skills-list-item">GIT</p>
                        <p class="skills-list-item">Vue.js</p>
                        <p class="skills-list-item">Javascript</p>
                        <p class="skills-list-item">CSS3</p>
                        <p class="skills-list-item">HTML</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="experience">
        <div class="container">
            <h2 class="experience-title">I'm happy to be a part of these teams:</h2>

            <div class="experience-teams-list">
                <div class="experience-team">
                    <img src="{{ asset('/images/companies/dizark.png') }}" alt="">
                </div>

                <div class="experience-team">
                    <img src="{{ asset('/images/companies/digitalaz.png') }}" alt="">
                </div>

                <div class="experience-team">
                    <img src="{{ asset('/images/companies/kinfirm.jpeg') }}" alt="">
                </div>

                <div class="experience-team experience-team--white-logo">
                    <img src="{{ asset('/images/companies/citynow.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@stop
