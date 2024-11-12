@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text c">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>VIDEOS, NEWS AND EVENT</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="videos section py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($beritaVideos as $beritaVideo)
                    @php
                        // Convert YouTube URL to embed format if needed
                        $youtubeEmbedUrl = preg_replace(
                            '/watch\?v=([a-zA-Z0-9_-]+)/', 
                            'embed/$1', 
                            $beritaVideo->youtube_url
                        );
                    @endphp
                    <div class="col-lg-6 col-md-6">
                        <div class="ratio ratio-16x9">
                            <iframe 
                                src="{{ $youtubeEmbedUrl }}?autoplay=0" 
                                title="YouTube video" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
