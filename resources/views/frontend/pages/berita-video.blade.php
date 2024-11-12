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

    <div class="videos section">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6 col-md-12">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/aIsjlQ7yy7E" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
