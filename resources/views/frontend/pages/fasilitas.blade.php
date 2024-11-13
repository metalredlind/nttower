@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text c">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>FASILITAS</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="fasilitas section">
        <div class="container">
            <div class="row g-3">
                <!-- Gallery Images -->
                @foreach ($fasilitas as $fasilitasList)
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{ asset($fasilitasList->thumb_image) }}" alt="" class="img-fluid"
                                onclick="openModal('{{ asset($fasilitasList->thumb_image) }}', '{!! $fasilitasList->deskripsi_fasilitas !!}')">
                            <p class="gallery-caption-overlay">{{$fasilitasList->nama_fasilitas}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Add more gallery items as needed -->
            </div>
        </div>
    </div>

    <!-- Modal for Full-Size Image with Text Box -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column flex-lg-row">
                    <!-- Full-Size Image -->
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <img id="modalImage" src="" alt="Full-Size Gallery Image" class="img-fluid" style="width: 100%; height: auto;">
                    </div>
                    <!-- Text Box for Description -->
                    <div class="col-lg-4 p-4" style="background-color: #fff; border-radius: 5px; max-height: 80vh; overflow-y: auto;">
                        <h5 class="mb-3">Deskripsi Fasilitas</h5>
                        <ul id="modalDescription" class="mb-0" style="color: #333; font-size: 1rem;"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(imageSrc, description) {
            document.getElementById("modalImage").src = imageSrc;
            const descriptionList = document.getElementById("modalDescription");

            // Directly set the HTML content to preserve any ordered/unordered list formatting
            descriptionList.innerHTML = description;

            const modal = new bootstrap.Modal(document.getElementById("galleryModal"));
            modal.show();
        }

    </script>
@endsection
