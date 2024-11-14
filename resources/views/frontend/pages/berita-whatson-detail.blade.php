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
              <div class="main-image">
                <img src="{{asset('frontend/assets/images/single-property.jpg')}}" alt="">
              </div>
              <div class="main-content">
                <span class="category">29/08/2023, 17:51</span>
                <h4>24 New Street Miami, OR 24560</h4>
                <p>Get <strong>the best villa agency</strong> HTML CSS Bootstrap Template for your company website. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it. Thank you. Cloud bread kogi bitters pitchfork shoreditch tumblr yr succulents single-origin coffee schlitz enamel pin you probably haven't heard of them ugh hella.
                
                <br><br>When you look for free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Digital Marketing, TemplateMo Corporate Layouts, etc. Master cleanse +1 intelligentsia swag post-ironic, slow-carb chambray knausgaard PBR&B DSA poutine neutra cardigan hoodie pop-up.</p>
              </div> 
            </div>
            <div class="col-lg-4">
              <div class="other-news">
                <h4 class="other-news-title">Artikel Terbaru</h4>
                <ul>
                  <li>
                    <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                    <h4>450 m2<br><span>Total Flat Space</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                    <h4>Contract<br><span>Contract Ready</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                    <h4>Payment<br><span>Payment Process</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                    <h4>Safety<br><span>24/7 Under Control</span></h4>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
