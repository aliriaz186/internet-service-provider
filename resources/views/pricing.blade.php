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
                    <div class="single-pricing-table" style="background: white">
                        <div class="pricing-header">
                            <div>
                                <img src="{{url('')}}/images/p1.jpg">
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: grey;text-align: center;font-size: 18px;"> LTE Wireless</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">20
                                MBPS DOWNLOAD
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$74.90/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white">
                        <div class="pricing-header">
                            <div>
                                <img src="{{url('')}}/images/p2.jpg">
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: grey;text-align: center;font-size: 18px;">Fixed Wireless</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Only</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">38
                                MBPS DOWNLOAD
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$84.90/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white">
                        <div class="pricing-header">
                            <div>
                                <img src="{{url('')}}/images/p3.jpg">
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Only</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">56
                                MBPS DOWNLOAD
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$94.90/mo</h2>
                        </div>
                        <a href="https://www.towercoverage.com/" class="view-plans-btn"
                           style="background: rgb(215, 0, 46);color: white">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing-table" style="background: white">
                        <div class="pricing-header">
                            <div>
                                <img src="{{url('')}}/images/p4.jpg">
                            </div>
                        </div>
                        <ul class="pricing-features-list">
                            <li style="color: grey;text-align: center;font-size: 18px;"> Fixed Wireless</li>
                            <li style="color: grey;text-align: center;font-size: 18px;"> Only</li>
                            <li style="color: rgb(215, 0, 46);text-align: center;font-size: 18px;font-weight: bold">74
                                MBPS DOWNLOAD
                            </li>
                        </ul>
                        <div>
                            <h2 style="font-weight: bold">$104.90/mo</h2>
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
