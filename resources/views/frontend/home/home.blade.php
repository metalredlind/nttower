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
                            <option value="main">Main Tower</option>
                            <option value="wing">Wing</option>
                            <option value="podium">Podium</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <select id="lantai-select" class="form-select">
                            <option value="">Pilih Lantai</option>
                        </select>
                    </div>
                    <div class="col-12 d-grid">
                        <button class="btn btn-primary" id="search-button">Cari Properti</button>
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
                            <source src="{{ asset('frontend/assets/video/Video Animasi NT TOWER.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Listen for changes on the zona-select dropdown
            $('#zona-select').on('change', function() {
                var zona = $(this).val();

                // Make an AJAX request to get the filtered properties based on zona
                $.ajax({
                    url: '/get-lantai-options',
                    method: 'GET',
                    data: { zona: zona },
                    success: function(response) {
                        // Clear existing lantai options
                        $('#lantai-select').empty();
                        $('#lantai-select').append('<option value="">Pilih Lantai</option>');

                        // Populate lantai options with floor names (nama_properti)
                        response.lantai.forEach(function(lantai) {
                            $('#lantai-select').append('<option value="' + lantai.nama_properti + '">' + lantai.nama_properti + '</option>');
                        });
                    }
                });
            });

            // Handle the search button click event as before
            $('#search-button').on('click', function() {
                let zona = $('#zona-select').val();
                let lantai = $('#lantai-select').val();

                let url = "{{ route('disewakan') }}";
                let params = new URLSearchParams();

                if (zona) params.append('zona', zona);
                if (lantai) params.append('lantai', lantai);

                window.location.href = `${url}?${params.toString()}`;
            });
        });
    </script>
@endpush
