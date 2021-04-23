@extends('layouts.landing')
@section('content')
<div class="main-banner" style="padding: 200px!important;background-image: url('/images/main2.jpg')">
   <div class="container">
         <h1 style="color: white;font-weight: bold;font-size: 80px;text-align: center">PRICING</h1>
   </div>
</div>
<section class="pricing-area ptb-100 extra-mb pb-0" style="margin-bottom: 0px!important;background: rgba(211,211,211,0.19);padding-bottom: 0px">
   <div class="container">
            <div class="section-title">
                <span>
                    <h3 style="color: black;font-weight: bold">RESIDENTIAL PLANS</h3>
                    <h4 style="color: black"> Upload Speeds = 10% of Download Speeds</h4>
                </span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white;padding: 40px">
                        <div class="pricing-header">
                            <div>
{{--                                <img src="{{url('')}}/images/p1.jpg">--}}
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: black;text-align: center;font-size: 20px;font-weight: bold">Basic Package</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">8 up and 2 down
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$56.95/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white;padding: 40px">
                        <div class="pricing-header">
                            <div>
                                {{-- <img src="{{url('')}}/images/p1.jpg">--}}
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: black;text-align: center;font-size: 20px;font-weight: bold">Premium Package</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">
                                12 up and 4 down
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$76.95/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white;padding: 40px">
                        <div class="pricing-header">
                            <div>
                                {{-- <img src="{{url('')}}/images/p1.jpg">--}}
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: black;text-align: center;font-size: 20px;font-weight: bold">Pro Package</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">
                                16 up and 8 down
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$110/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white;padding: 40px">
                        <div class="pricing-header">
                            <div>
                                {{-- <img src="{{url('')}}/images/p1.jpg">--}}
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: black;text-align: center;font-size: 20px;font-weight: bold">Premier Package
                            </li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">
                                25 up and 8 down
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$170/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 40px;padding-bottom: 30px">
                    <h3 style="color: black;font-weight: bold;text-align: center" >BUSINESS PLANS</h3>
                    <h4 style="color: black;text-align: center"> Call for pricing on our business packages 334-635-0979</h4>
            </div>
        </div>
</section>
@endsection
