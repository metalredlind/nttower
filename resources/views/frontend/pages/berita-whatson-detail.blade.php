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
                <h4 class="other-news-title mb-4">Artikel Terbaru</h4>
                <ul>
                  <li>
                    <img src="{{asset('frontend/assets/images/single-property.jpg')}}" alt="" class="flex-shrink-0">
                    <div> 
                      <h4>
                        <a href="">Nihil blanditiis at in nihil autem</a>
                      </h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('frontend/assets/images/single-property.jpg')}}" alt="" class="flex-shrink-0">
                    <div> 
                      <h4>
                        <a href="">Nihil blanditiis at in nihil autem</a>
                      </h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
