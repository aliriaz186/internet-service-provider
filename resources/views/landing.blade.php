@extends('layouts.landing')
@section('content')

<div class="main-banner" style="padding-top: 20px!important;">
    <div class="container">
        <div class="row align-items-center m-0">
            <div class="col-lg-6 p-0">
                <div class="main-banner-content">
                    <h1>Eagle Internet</h1>
                    <ul style="color: white;font-size: 20px">
                        <li>No Data Limits.</li>
                        <li>No Hidden Charges.</li>
                        <li>In House Support.</li>
                    </ul>
                    <div class="btn-box">
                        <a href="{{url('contactus')}}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="banner-image">
                    <img src="{{url('')}}/assets/img/banner-img1.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <div class="shape-img1"><img src="{{url('')}}/assets/img/shape-image/1.png" alt="imgae"></div>
</div>


<section class="features-area bg-image ptb-100">
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-wifi"></i>
</span>
<span>Eagle Internet Services</span>
</span>
            <h2>We are internet service provider company in Alabama, United States</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-speedometer"></i>
                    </div>
                    <h3>FIXED WIRELESS</h3>
{{--                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
                    <div class="back-icon">
                        <i class="flaticon-speedometer"></i>
                    </div>
                    <div class="image-box">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>
                    <h3>LTE INTERNET SERVICE</h3>
{{--                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
                    <div class="back-icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>
                    <div class="image-box">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>
                    <h3>DATA CENTER</h3>
{{--                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
                    <div class="back-icon">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="image-box">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> About Eagle Internet</span>
                    <h2>Experience the magic of tech to serve you a best</h2>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisseLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Learn More</a>--}}
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{url('')}}/assets/img/about-img1.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-area bg-image ptb-100">
    <div class="container">
        <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-technical-support"></i>
</span>
<span>Why Choose Us</span>
</span>
{{--            <h2>Explore the next Isp unlimited possibilities</h2>--}}
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>NO DATA LIMITS</h3>
{{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>GUARANTEED SPEEDS</h3>
{{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>NO HIDDEN CHARGES</h3>
{{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
{{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>LOCALLY OWNED</h3>
                    {{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
                    {{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>IN HOUSE SUPPORT</h3>
                    {{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
                    {{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-wifi-signal-tower"></i>
                    </div>
                    <h3>MONITORING</h3>
                    {{--                    <p>Lorem ipsudolorsitamet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>--}}
                    {{--                    <a href="#" class="read-more-btn">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cta-area" style="margin-top: 200px!important;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="cta-content">
                    <h3>Call Us Now</h3>
                    <a href="#">334-635-0979</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="cta-btn">
                    <a href="https://www.towercoverage.com/" target="_blank" class="btn btn-primary">Check Coverage in Your Area</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
