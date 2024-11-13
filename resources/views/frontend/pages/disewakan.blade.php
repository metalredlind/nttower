@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text c">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>DISEWAKAN</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-4">
                    <select id="zona-select" class="form-select">
                        <option value="">Semua Zona</option>
                        <option value="main">Main Tower</option>
                        <option value="wing">Wing</option>
                        <option value="podium">Podium</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="lantai-select" class="form-select">
                        <option value="">Pilih Lantai</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="sort-select" class="form-select">
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="floor-asc">Lantai Terendah ke Tertinggi</option>
                        <option value="floor-desc">Lantai Tertinggi ke Terendah</option>
                    </select>
                </div>
                <div class="col-12 d-grid">
                    <button class="btn btn-primary filter-button">Cari Properti</button>
                </div>
            </div>
            <ul class="properties-filter" style="margin-top: 100px;">

            </ul>
            <div id="disewakan-list">
                @include('frontend.pages.partials.disewakan-list', ['disewakans' => $disewakans])
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    {{ $disewakans->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#zona-select').on('change', function() {
                var zona = $(this).val();

                // Make an AJAX request to get the filtered properties based on zona
                $.ajax({
                    url: '/get-lantai-options',
                    method: 'GET',
                    data: {
                        zona: zona
                    },
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

            function filterProperties() {
                let zona = $('#zona-select').val();
                let lantai = $('#lantai-select').val();
                let sort = $('#sort-select').val();

                $.ajax({
                    url: '{{ route("disewakan") }}',
                    type: 'GET',
                    data: {
                        zona: zona,
                        lantai: lantai,
                        sort: sort
                    },
                    success: function(data) {
                        $('#disewakan-list').html(data); // Insert the response HTML
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", xhr.responseText);
                    }
                });
            }

            $('#zona-select, #lantai-select, #sort-select').on('change', filterProperties);
            $('.filter-button').on('click', filterProperties);
        });
    </script>
@endpush
