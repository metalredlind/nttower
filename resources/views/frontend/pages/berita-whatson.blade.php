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
                @foreach ($beritas as $berita)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv" style="position: absolute; left: 0px; top: 0px;">
                        <div class="item">
                            <a href="{{route('berita-detail', $berita->slug)}}"><img src="{{ asset($berita->image) }}" alt=""></a>
                            <h4 class="berita-title">
                                <a href="{{route('berita-detail', $berita->slug)}}">{{$berita->judul_berita}}</a>
                            </h4>
                            <span>{{$berita->updated_at}}</span>
                            <div class="content">
                                {!! \Illuminate\Support\Str::limit($berita->isi_berita, 200, $end = '...') !!}
                            </div>
                            <div class="main-button">
                                <a href="{{route('berita-detail', $berita->slug)}}">Selengkapnya >></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="row">
                <div class="d-flex justify-content-center">
                    {{ $beritas->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
