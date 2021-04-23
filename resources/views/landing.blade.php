@extends('layouts.landing')
@section('content')

<div class="main-banner" style="padding-top: 20px!important;background: white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{url('')}}/images/main.png" alt="image">
            </div>
            <div class="col-lg-5" style="padding: 30px; margin-top: 70px">
{{--                <div class="main-banner-content">--}}
{{--                    <h1>Eagle Internet</h1>--}}
                    <ul style="color: black;font-size: 25px">
                        <li>No Data Limits</li>
                        <li>Guaranteed Speed</li>
                        <li>No Hidden Charges</li>
                        <li>In House Support</li>
                    </ul>

{{--                </div>--}}
            </div>
            <div class="col-lg-3">
                <div class="btn-box" style="padding: 30px;margin-top: 70px">
                    <h1>BLAZING</h1>
                    <h1>FAST</h1>
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


<section class="features-area bg-image ptb-100">
    <div class="container">
        <div class="section-title">
<span>
{{--<span class="icon">--}}
{{--<i class="flaticon-wifi"></i>--}}
{{--</span>--}}
<h3>OUR SERVICES</h3>
</span>
{{--            <h2>We are internet service provider company in Alabama, United States</h2>--}}
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fa fa-wifi"></i>
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
{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="single-features-box">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="fa fa-signal"></i>--}}
{{--                    </div>--}}
{{--                    <h3>LTE INTERNET SERVICE</h3>--}}
{{--                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                    <div class="back-icon">--}}
{{--                        <i class="flaticon-speedometer-1"></i>--}}
{{--                    </div>--}}
{{--                    <div class="image-box">--}}
{{--                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">--}}
{{--                        <img src="{{url('')}}/assets/img/shape-image/2.png" alt="image">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fa fa-database"></i>
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



<section class="features-area bg-image ptb-100" style="background: rgba(211,211,211,0.25)">
  <div class="container">
     <div style="text-align: center">
         <h1>LOCALLY <span style="color:rgb(215, 0, 46);">OWNED</span></h1>
         <p>Our headquarters are located Demopolis, Alabama near our coverage area. We feel an extra level of responsibility to provide a great product and customer service.</p>
      </div>
  </div>
</section>


{{--<section class="about-area ptb-100">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6 col-md-12">--}}
{{--                <div class="about-content">--}}
{{--                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> About Eagle Internet</span>--}}
{{--                    <h2>Experience the magic of tech to serve you a best</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisseLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                    <a href="#" class="btn btn-primary">Learn More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-md-12">--}}
{{--                <div class="about-image">--}}
{{--                    <img src="{{url('')}}/assets/img/about-img1.png" alt="image">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="services-area ptb-100">
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
                <div class="single-services-box" style="border-color: lightgrey;height: 300px;overflow-y: scroll" >
                    <div class="icon">
                        <i class="fa fa-book-open"></i>
                    </div>
                    <h3>NO DATA LIMITS</h3>
                    <hr>
                    <p>
                        Eagle Internet does not enforce any data caps. Therefore, you can download or upload large files (software, updates, large email attachments, etc.), run a VoIP phone system, stream music in your home or office, or use internet-based applications and databases as much as you need to in order to keep your business running at its best.


                        {{--                        Download or upload at your maximum rates 24/7! Never worry about getting throttled or going over your rate package limits.--}}
                    </p>
                </div>
            </div>
{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="single-services-box" style="border-color: lightgrey">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="fa fa-meteor"></i>--}}
{{--                    </div>--}}
{{--                    <h3>GUARANTEED SPEEDS--}}
{{--                    </h3>--}}
{{--                    <hr>--}}
{{--                    <p>--}}
{{--                        We offer guaranteed minimum speeds that range from 75% to 100% of the maximum rate. There is a reason why we guarantee minimum speeds.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" style="border-color: lightgrey">
                    <div class="icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h3>NO HIDDEN CHARGES
                    </h3>
                    <hr>
                    <p>
                        We have no hidden charges and no overage fees.
                    </p>
                </div>
            </div>
{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="single-services-box" style="border-color: lightgrey">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="fa fa-eye"></i>--}}
{{--                    </div>--}}
{{--                    <h3>MONITORING--}}
{{--                    </h3>--}}
{{--                    <hr>--}}
{{--                    <p>--}}
{{--                        We proactively monitor 6 key performance areas on every customer radio. The data is collected every minute and stored for at least 6 months.--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" style="border-color: lightgrey">
                    <div class="icon">
                        <i class="fa fa-tools"></i>
                    </div>
                    <h3>IN HOUSE SUPPORT

                    </h3>
                    <hr>
                    <p>
                        We don't outsource support to foreign based call centers. Our support team work alongside our engineers and network monitoring personnel.


                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" style="border-color: lightgrey">
                    <div class="icon">
                        <i class="fa fa-location-arrow"></i>
                    </div>
                    <h3>LOCALLY OWNED

                    </h3>
                    <hr>
                    <p>
                        Our headquarters are located in Demopolis, Alabama near our coverage area. We feel an extra level of responsibility to provide a great product and customer service.


                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" style="border-color: lightgrey">
                    <div class="icon">
                        <i class="fa fa-handshake"></i>
                    </div>
                    <h3>No Contract

                    </h3>
                    <hr>
                    <p>
                        We do not want our customers to sign any contract. They can cancel their subscription anytime.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box" style="border-color: lightgrey">
                    <div class="icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h3>
                        No Credit Check

                    </h3>
                    <hr>
                    <p>
                        No credit check or credit history required.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
