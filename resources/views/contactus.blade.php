@extends('layouts.landing')
@section('content')


    <section class="pricing-area ptb-100 extra-mb pb-0" style="margin-bottom: 100px!important;">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Eagle Internet Contact</span>
</span>
                <h2>Contact Us</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('msg'))
                    <div class="alert alert-success" style="margin-bottom: 0px!important;">
                        <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
                    </div>
                @endif
                {{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore--}}
                {{--                    et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>--}}
            </div>
            <div>
                <form action="{{url('send-email')}}" method="post">
                    @csrf
                    <div>
                        <label>Name</label><br>
                        <input type="text" name="name" class="form-control" required>
                    </div><br>
                    <div>
                        <label>Email</label><br>
                        <input type="text" name="email" class="form-control" required>
                    </div><br>
                    <div>
                        <label>Phone</label><br>
                        <input type="text" name="phone" class="form-control" required>
                    </div><br>
                    <div>
                        <label>Message</label><br>
                        <textarea name="message" class="form-control" required></textarea>
                    </div><br>
                    <div>
                        <button class="btn btn-secondary">Submit</button>
                    </div>
                </form>
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
