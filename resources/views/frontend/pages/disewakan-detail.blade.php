@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>DETIL PROPERTI</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Main Image -->
                    <div class="main-image mb-3">
                        <img id="mainImage" src="{{ asset($disewakan->thumb_image) }}" alt="Main Property Image"
                            class="img-fluid">
                    </div>

                    <div class="main-content">
                        <span class="category">Perkantoran</span>
                        <h4>{{$disewakan->nama_properti}}</h4>
                        <div class="gallery d-flex">
                            <img src="{{ asset($disewakan->thumb_image) }}" alt="Thumbnail 1" class="img-thumbnail me-2"
                                style="width: 300px; cursor: pointer;" onclick="changeImage(this)">
                            @foreach ($disewakan->disewakanImageGalleries as $gallery)
                                <img src="{{ asset($gallery->image) }}" alt="Thumbnail 1" class="img-thumbnail me-2"
                                    style="width: 300px; cursor: pointer;" onclick="changeImage(this)">
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="{{ asset('frontend/assets/images/info-icon-01.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>{{$disewakan->net_area}} m2<br><span>Net. Area</span></h4>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/info-icon-03.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>{{statusDisewakan($disewakan->status_properti)}}<br><span>Status</span></h4>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/info-icon-02.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>0881-0100-65128<br><span>Hubungi Kami</span></h4>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/info-icon-04.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>{{zonaDisewakan($disewakan->zona_properti)}}<br><span>Zona</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(element) {
            const mainImage = document.getElementById("mainImage");
            mainImage.src = element.src;
        }
    </script>
@endsection
