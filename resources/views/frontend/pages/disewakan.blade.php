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
                    <a href="#!" data-filter=".dis">Gudang</a>
                </li>
            </ul>
            <div class="row properties-box">
                @foreach ($disewakans as $disewakan)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 dis">
                        <div class="item">
                            <a href="#"><img src="{{asset($disewakan->thumb_image)}}" alt=""></a>
                            <span class="category">Perkantoran</span>
                            <h6>-</h6>
                            <h4><a href="#">{{$disewakan->nama_properti}}</a></h4>
                            <ul>
                                <li>Net. Area: <span>{{$disewakan->net_area}}</span></li>
                                <li>Status: <span>{{$disewakan->status_properti}}</span></li>
                            </ul>
                            <div class="main-button">
                                <a href="#">Lihat Detil</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a class="is_active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
