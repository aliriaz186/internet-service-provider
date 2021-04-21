@extends('layouts.landing')
@section('content')




    <section class="pricing-area ptb-100 extra-mb pb-0" style="margin-bottom: 100px!important;">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Eagle Internet Pricing</span>
</span>
                <h2>Discover our best plans</h2>
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore--}}
{{--                    et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>--}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                        </div>
                        <ul class="pricing-features-list">
{{--                            <li><i class="flaticon-check-mark"></i> LTE Wireless</li>--}}
                            <li><i class="flaticon-check-mark"></i> Fixed Wireless</li>
                            <li><i class="flaticon-check-mark"></i> 20 MBPS DOWNLOAD</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            74.90
                            <span>/mo</span>
                        </div>
                        <a href="{{url('contactus')}}" class="view-plans-btn">Get Started</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> Fixed Wireless Only</li>
{{--                            <li><i class="flaticon-check-mark"></i> Fixed Wireless</li>--}}
                            <li><i class="flaticon-check-mark"></i> 38 MBPS DOWNLOAD</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            84.90
                            <span>/mo</span>
                        </div>
                        <a href="{{url('contactus')}}" class="view-plans-btn">Get Started</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> Fixed Wireless Only</li>
                            {{--                            <li><i class="flaticon-check-mark"></i> Fixed Wireless</li>--}}
                            <li><i class="flaticon-check-mark"></i>56 MBPS DOWNLOAD</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            94.90
                            <span>/mo</span>
                        </div>
                        <a href="{{url('contactus')}}" class="view-plans-btn">Get Started</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> Fixed Wireless Only</li>
                            {{--                            <li><i class="flaticon-check-mark"></i> Fixed Wireless</li>--}}
                            <li><i class="flaticon-check-mark"></i> 74 MBPS DOWNLOAD</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            104.90
                            <span>/mo</span>
                        </div>
                        <a href="{{url('contactus')}}" class="view-plans-btn">Get Started</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
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
