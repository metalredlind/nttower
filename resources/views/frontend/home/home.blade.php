@extends('frontend.layouts.master')

@section('content')
    <div class="main-banner">
    <div class="header-text">
      <h7>NT Tower Opportunity<br>& Profitable</h7>
      <div class="container">
        <div class="row g-2">
          <div class="col-12 col-md-6">
            <select id="zona-select" class="form-select">
              <option value="">Semua Zona</option>
              <option value="rendah">Main Tower</option>
              <option value="tinggi">Wing</option>
              <option value="tinggi">Podium</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <select id="lantai-select" class="form-select">
              <option value="">Pilih Lantai</option>
            </select>
          </div>
          <div class="col-12 d-grid">
            <button class="btn btn-primary">Cari Properti</button>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-banner">
      <div class="item item-1"></div>
      <div class="item item-2"></div>
      <div class="item item-3"></div>
      <div class="item item-4"></div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="video-content">
        <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <div class="video-frame">
                <video controls width="100%">
                <source src="{{asset('frontend/assets/video/Video Animasi NT TOWER.mp4')}}" type="video/mp4">
                </video>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
