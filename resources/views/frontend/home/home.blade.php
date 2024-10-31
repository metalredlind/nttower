@extends('frontend.layouts.master')

@section('content')
  <div class="main-banner">
    <div class="header-text">
      <h7>Rent now!<br>Get the Best Property for you!</h7>
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
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Direktori Tenan</h6>
            <h2>Kami memiliki ratusan penyewa dari Perusahaan Besar</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Perkantoran</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Komersial</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Lainnya</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>185 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>4</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('frontend/assets/images/deal-01.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Perkantoran</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.</p>
                      <div class="icon-button">
                        <a href="fasilitas.html"><i class="fa fa-map"></i> Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('frontend/assets/images/deal-02.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Komersial</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.</p>
                      <div class="icon-button">
                        <a href="fasilitas.html"><i class="fa fa-map"></i> Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('frontend/assets/images/deal-03.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Lainnya</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.</p>
                      <div class="icon-button">
                        <a href="fasilitas.html"><i class="fa fa-map"></i> Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <iframe src="https://www.youtube.com/embed/p_FalizNDGk?si=9BgkDFYwLCfZ_Q-3" 
                    title="YouTube video player" 
                    allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  document.getElementById('zona-select').addEventListener('change', function () {
  const lantaiSelect = document.getElementById('lantai-select');
  const zona = this.value;
  lantaiSelect.innerHTML = '<option value="">Pilih Lantai</option>';

  if (zona === 'rendah') {
    const options = [1, 2, 3];
    options.forEach(option => {
      const newOption = document.createElement('option');
      newOption.value = option;
      newOption.text = option;
      lantaiSelect.appendChild(newOption);
    });
  } else if (zona === 'tinggi') {
    const options = [4, 5, 6];
    options.forEach(option => {
      const newOption = document.createElement('option');
      newOption.value = option;
      newOption.text = option;
      lantaiSelect.appendChild(newOption);
    });
  }
});
  </script>

@endsection