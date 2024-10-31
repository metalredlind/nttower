@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>DISEWAKAN</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-4">
                    <select id="zona-select" class="form-select">
                        <option value="">Semua Zona</option>
                        <option value="rendah">Main Tower</option>
                        <option value="tinggi">Wing</option>
                        <option value="tinggi">Podium</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="lantai-select" class="form-select">
                        <option value="">Pilih Lantai</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="sort-select" class="form-select">
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="floor-asc">Lantai Terendah ke Tertinggi</option>
                        <option value="floor-desc">Lantai Tertinggi ke Terendah</option>
                        <option value="price-asc">Harga Terendah ke Tertinggi</option>
                        <option value="price-desc">Harga Tertinggi ke Terendah</option>
                    </select>
                </div>
                <div class="col-12 d-grid">
                    <button class="btn btn-primary">Cari Properti</button>
                </div>
            </div>
            <ul class="properties-filter" style="margin-top: 100px;">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Semua</a>
                </li>
                <li>
                    <a href="#!" data-filter=".adv">Perkantoran</a>
                </li>
                <li>
                    <a href="#!" data-filter=".str">Komersial</a>
                </li>
                <li>
                    <a href="#!" data-filter=".rac">Retail</a>
                </li>
                <li>
                    <a href="#!" data-filter=".rac">Gudang</a>
                </li>
            </ul>
            <div class="row properties-box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                    <div class="item">
                        <a href="property-details.html"><img src="{{asset('frontend/assets/images/property-01.jpg')}}" alt=""></a>
                        <span class="category">Perkantoran</span>
                        <h6>$2.264.000</h6>
                        <h4><a href="property-details.html">Lantai 7</a></h4>
                        <ul>
                            <li>Net. Area: <span>545m2</span></li>
                            <li>Status: <span>Disewakan</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Lihat Detil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                    <div class="item">
                        <a href="property-details.html"><img src="{{asset('frontend/assets/images/property-02.jpg')}}" alt=""></a>
                        <span class="category">Perkantoran</span>
                        <h6>$1.180.000</h6>
                        <h4><a href="property-details.html">Lantai 8</a></h4>
                        <ul>
                            <li>Net. Area: <span>545m2</span></li>
                            <li>Status: <span>Disewakan</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Lihat Detil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
                    <div class="item">
                        <a href="property-details.html"><img src="{{asset('frontend/assets/images/property-03.jpg')}}" alt=""></a>
                        <span class="category">Perkantoran</span>
                        <h6>$1.460.000</h6>
                        <h4><a href="property-details.html">Lantai 9</a></h4>
                        <ul>
                            <li>Net. Area: <span>545m2</span></li>
                            <li>Status: <span>Disewakan</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Lihat Detil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a class="is_active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
