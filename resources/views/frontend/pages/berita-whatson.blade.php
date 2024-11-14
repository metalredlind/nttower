@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>What's On</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="whatson section">
        <div class="container">
            <div class="row properties-box" style="position: relative; height: 1896.15px;">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="{{route('berita-detail')}}"><img src="{{ asset('frontend/assets/images/property-01.jpg') }}"
                                alt=""></a>

                        <h4 class="berita-title">
                            <a href="{{route('berita-detail')}}">18 Old Street Miami, OR 97219</a>
                        </h4>
                        <span>29/08/2023, 17:51</span>
                        <div class="content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor...
                        </div>
                        <div class="main-button">
                            <a href="{{route('berita-detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="property-details.html"><img src="{{ asset('frontend/assets/images/property-01.jpg') }}"
                                alt=""></a>

                        <h4 class="berita-title">
                            <a href="property-details.html">18 Old Street Miami, OR 97219</a>
                        </h4>
                        <span>29/08/2023, 17:51</span>
                        <div class="content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor...
                        </div>
                        <div class="main-button">
                            <a href="property-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="property-details.html"><img src="{{ asset('frontend/assets/images/property-01.jpg') }}"
                                alt=""></a>

                        <h4 class="berita-title">
                            <a href="property-details.html">18 Old Street Miami, OR 97219</a>
                        </h4>
                        <span>29/08/2023, 17:51</span>
                        <div class="content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor...
                        </div>
                        <div class="main-button">
                            <a href="property-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="property-details.html"><img src="{{ asset('frontend/assets/images/property-01.jpg') }}"
                                alt=""></a>

                        <h4 class="berita-title">
                            <a href="property-details.html">18 Old Street Miami, OR 97219</a>
                        </h4>
                        <span>29/08/2023, 17:51</span>
                        <div class="content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor...
                        </div>
                        <div class="main-button">
                            <a href="property-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="property-details.html"><img src="{{ asset('frontend/assets/images/property-01.jpg') }}"
                                alt=""></a>

                        <h4 class="berita-title">
                            <a href="property-details.html">18 Old Street Miami, OR 97219</a>
                        </h4>
                        <span>29/08/2023, 17:51</span>
                        <div class="content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor...
                        </div>
                        <div class="main-button">
                            <a href="property-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
