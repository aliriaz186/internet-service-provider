@extends('layouts.landing')
@section('content')

    <div class="main-banner" style="padding-top: 100px!important;background-image: url('/images/main3.jpg');height: 120vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-5" style="padding: 30px; margin-top: 70px">
                    {{--                <div class="main-banner-content">--}}
                    {{--                    <h1>Eagle Internet</h1>--}}

                    {{--                </div>--}}
                </div>
                <div class="col-lg-4">
                    <div class="btn-box" style="padding: 30px;margin-top: 70px">
                        <h1>FAST AND</h1>
                        <h1>RELIABLE</h1>
                        <h1>INTERNET</h1>
                        <a target="_blank" href="https://www.towercoverage.com/" class="btn btn-primary" style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                {{--            <div class="col-lg-6 p-0">--}}
                {{--                <div class="banner-image">--}}
                {{--                    <img src="{{url('')}}/assets/img/banner-img1.png" alt="image">--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
        {{--    <div class="shape-img1">--}}
        {{--        <img src="{{url('')}}/assets/img/shape-image/1.png" alt="imgae">--}}
        {{--    </div>--}}
    </div>


    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
            <span>
            <h1 style="color: rgb(215, 0, 46);">WHY CHOOSE US</h1>
            </span>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box1" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h3>STEP 1
                        </h3>
                        <p>

                            We install a radio & antenna and align it to the nearest tower


                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box1" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h3>STEP 2</h3>
                        <p>

                            We run a cable from the radio to your router


                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box1" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h3>STEP 3</h3>
                        <p>

                            You enjoy fast, reliable, high-speed Internet


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area ptb-100" style="background: rgba(211,211,211,0.2)">
        <div class="container">
            <div class="section-title">
<span>
{{--<span class="icon">--}}
    {{--<i class="flaticon-technical-support"></i>--}}
    {{--</span>--}}
<h1 style="color: rgb(215, 0, 46);">WHY CHOOSE US</h1>
</span>
                {{--            <h2>Explore the next Isp unlimited possibilities</h2>--}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-redo"></i>
                        </div>
                        <h3>NO DATA LIMITS</h3>
                        <hr>
                        <p>
                            You can run at your maximum information rate 24x7x365. Stream, Download and Game without worrying about having your connection throttled or receiving a huge bill at the end of the month.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <h3>LOCAL SERVICE

                        </h3>
                        <hr>
                        <p>
                            Headquartered in North-East Texas with In-House Sales, Installation Crews and Technical Support. Support takes on a whole new meaning when you live and work with the customers you serve.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box" style="border-color: lightgrey">
                        <div class="icon">
                            <i class="fa fa-cloud-download-alt"></i>
                        </div>
                        <h3>
                            LATEST TECHNOLOGY
                        </h3>
                        <hr>
                        <p style="padding-bottom: 10px">
                            We are constantly upgrading and expanding our network with the latest technologies and newest gear to keep pace with increasing demands from our customers.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="features-area bg-image ptb-100">
        <div class="container">
            <div style="text-align: center">
                <h1 style="text-align: center;color: rgb(215, 0, 46)">The Ultimate Gaming and Video Experience.</h1>
                <h1 style="text-align: center;color: black">Find out if Fixed Wireless is available in your area.
                </h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon" style="color: rgb(215, 0, 46)">
                            <i class="fa fa-play"></i>
                        </div>
                        <p>
                            STREAM YOUR FAVORITE MOVIES, SHOWS AND VIDEO.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon" style="color: rgb(215, 0, 46)">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <p>
                            GAME ONLINE. NO LAG, NO LIMITS, NO DISCONNECTS.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon" style="color: rgb(215, 0, 46)">
                            <i class="fa fa-wifi"></i>
                        </div>
                        <p>
                            STREAM YOUR FAVORITE ONLINE RADIO STATIONS.
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-2">
                        <div style="padding: 30px;border-radius: 5px;border: 1px solid lightgrey">
                                Netflix
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="padding: 30px;border-radius: 5px;border: 1px solid lightgrey">
                            HULU
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="padding: 30px;border-radius: 5px;border: 1px solid lightgrey">
                            AMAZON PRIME
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="padding: 30px;border-radius: 5px;border: 1px solid lightgrey">
                            VUDU
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="padding: 30px;border-radius: 5px;border: 1px solid lightgrey">
                            YOUTUBE
                        </div>
                    </div>
                </div>

                <h1 style="margin-top: 20px">
                    Recommended bandwidth requirements from popular streaming video services

                </h1>
                <div style=";margin: 0 auto;max-width:800px;margin-top: 20px;">
                    <img src="{{url('')}}/images/ab.png">

                </div>
            </div>
        </div>
    </section>




@endsection
