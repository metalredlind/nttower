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
                <img src="{{ asset($beritas->image) }}" alt="">
              </div>
              <div class="main-content">
                <span class="category">{{ $beritas->updated_at }}</span>
                <h4>{{ $beritas->judul_berita }}</h4>
                <div>
                  {!! $beritas->isi_berita !!}
                </div>
              </div> 
            </div>
            <div class="col-lg-4">
              <div class="other-news">
                <h4 class="other-news-title mb-4">Artikel Terbaru</h4>
                <ul>
                  @foreach ($artikelTerbaru as $artikel)
                    <li>
                      <img src="{{asset($artikel->image)}}" alt="" class="flex-shrink-0">
                      <div> 
                        <h4>
                          <a href="">{{$artikel->judul_berita}}</a>
                        </h4>
                        <time datetime="2020-01-01">{{$artikel->updated_at}}</time>
                      </div>
                    </li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
