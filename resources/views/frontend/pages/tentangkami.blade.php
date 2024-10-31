@extends('frontend.layouts.master')

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">NT Tower</a></span>
          <h3>TENTANG KAMI</h3>
        </div>
      </div>
    </div>
  </div>

  <section class="about-section section-padding" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0" style="margin-top: 100px;">
                <h3 class="mb-3">NT Tower History</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center" style="margin-top: 100px;">
                <img src="{{asset('frontend/assets/images/property-02.jpg')}}" alt="NT Tower Image" class="img-fluid">
            </div>
        </div>
    </div>
  </section>

@endsection