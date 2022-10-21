@section('title', 'Home | AEAP')
@extends('layouts.layout')

@section('content')


    @include('banner-section')

    {{--            Second Section         --}}

    <div class="welder-service-section section-margin-top each-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-welder-left">
                        <img src="{{asset('/assets/images/service-left.png')}}" alt="welder service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-right pl-5">
                        <div class="section-heading">
                            <h2 class="text-left"> Our Branns:</h2>
                        </div>
                        <div class="para-text">
                            <p>
                                We can supply parts for the following brands
                            </p>
                        </div>
                        <ul class="list-style-cm">
                            <li>Welding and Cutting</li>
                            <li>Fabrication and Engineering</li>
                            <li>Coded Welding</li>
                            <li>Hydrostatic Testing</li>
                            <li>Basic Machining</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--    <div class="get-work-section section-margin-top each-section">
        <div class="container">
            <div class="section-heading">
                <h2>Brands</h2>
            </div>
            <div class="row" style="background: #1a1a1a; padding: 28px 14px;  border-radius: 12px;">
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b1.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b2.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b3.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b4.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b5.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b6.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b7.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b8.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b9.png')}}" alt="brand images">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="each-brands">
                        <img src="{{asset('/assets/images/brands/b10.png')}}" alt="brand images">
                    </div>
                </div>
            </div>
        </div>
    </div>-->



    {{--            Brand Section           --}}
    {{-- <section id="brands">
        <div class="brand-section section-margin-top each-section">
            <div class="container">
                <div class="section-heading">
                    <h2>Brands</h2>
                </div>
                <div class="row" style="background: #1a1a1a; padding: 28px 14px;  border-radius: 12px;">
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b1.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b2.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b3.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b4.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b5.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b6.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b7.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b8.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b9.png')}}" alt="brand images">
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="each-brands">
                            <img src="{{asset('/assets/images/brands/b10.png')}}" alt="brand images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{--            About us            --}}

    <div class="about-us-section section-margin-top each-section">
        <div class="container">
            <div class="section-heading">
                <h2>About us</h2>
            </div>
        </div>
        <div class="about-container">
            <div class="hero">
                <div class="left">
                    <div class="section-heading">
                        <h2 class="text-left" style="color: black">American equipment<br><span style="color: #eab902"><b>and parts</b></span></h2>
                    </div>
                    <div class="para-text">
                        <p style="color: #000000">
                            American Equipment & parts is committed to serving the mining and construction industries with new, rebuilt, and quality
                            used replacement parts for off-highway heavy mobile equipment such as haul trucks, electric and hydraulic shovels, drills, loaders,
                            dozers, and much more. We have access to a growing inventory of diesel engines, transmissions, suspensions, hydraulic cylinders, final
                            drive parts, gears, differentials, electric motors, plus the smaller, harder to find parts you may need.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="{{asset('/assets/images/about-02.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
