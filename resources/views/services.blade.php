@extends('layouts.landing')
@section('content')


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
