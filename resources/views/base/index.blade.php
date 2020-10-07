@extends('layouts/app')

@section('contents')
    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay d-flex align-items-center overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="welcome-intro">
                        <h1 class="text-white">Cloner.xyz<br>Version 3.0.0</h1>
                        <p class="text-white my-4">The best tools/web site to copy and paste any Discord server with only, one invitation link.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section id="features" class="section features-area style-two overflow-hidden ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <!-- Image Box -->
                    <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <!-- Featured Image -->
                        <div class="featured-img mb-3">
                            <img class="avatar-sm" src="{{ asset('img/icon/featured-img/layers.png') }}" alt="">
                        </div>
                        <!-- Icon Text -->
                        <div class="icon-text">
                            <h3 class="mb-2">Fully functional</h3>
                            <p>We try to do our best to offer you a service that works perfectly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <!-- Image Box -->
                    <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Featured Image -->
                        <div class="featured-img mb-3">
                            <img class="avatar-sm" src="{{ asset('img/icon/featured-img/speak.png') }}" alt="">
                        </div>
                        <!-- Icon Text -->
                        <div class="icon-text">
                            <h3 class="mb-2">Support</h3>
                            <p>Need some help? Join our discord ! We will be there to help you!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Image Box -->
                    <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <!-- Featured Image -->
                        <div class="featured-img mb-3">
                            <img class="avatar-sm" src="{{ asset('img/icon/featured-img/support.png') }}" alt="">
                        </div>
                        <!-- Icon Text -->
                        <div class="icon-text">
                            <h3 class="mb-2">Easy to use</h3>
                            <p>We work hard to try to make it easier for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!--====== Contact Area Start ======-->
    <section class="section download-area overlay-dark ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="download-text text-center">
                        <h2 class="text-white">Contact us</h2>
                        <p class="text-white my-3 d-none d-sm-block"></p>
                        <div class="button-group store-buttons d-flex justify-content-center">
                            <a href="https://discord.gg/CrP9HEC">
                                <img src="{{ asset('img/icon/discord3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Area End ======-->

    <!--====== Team Area Start ======-->
    <section class="section team-area team-style-two overflow-hidden ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <!-- Single Team -->
                    <div class="single-team text-center radius-100 overflow-hidden m-2 m-lg-0">
                        <!-- Team Thumb -->
                        <div class="team-thumb radius-100 d-inline-block position-relative overflow-hidden">
                            <img src="{{ asset('img/avatar/Niroxy.png') }}" alt="">
                            <!-- Team Overlay -->
                            <div class="team-overlay radius-100">
                                <h4 class="team-name text-white">Niroxy</h4>
                                <h5 class="team-post text-white mt-2 mb-3">Founder &amp; Developer</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <!-- Single Team -->
                    <div class="single-team text-center radius-100 overflow-hidden m-2 m-lg-0">
                        <!-- Team Thumb -->
                        <div class="team-thumb radius-100 d-inline-block position-relative overflow-hidden">
                            <img src="{{ asset('img/avatar/Hideaki.gif') }}" width="100%" alt="">
                            <!-- Team Overlay -->
                            <div class="team-overlay radius-100">
                                <h4 class="team-name text-white">Hideaki</h4>
                                <h5 class="team-post text-white mt-2 mb-3">Founder &amp; Developer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Team Area End ======-->
@endsection



