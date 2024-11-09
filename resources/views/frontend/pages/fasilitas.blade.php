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
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/ballroom.jpg')}}" alt="Ballroom" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/ballroom.jpg') }}', 'Ballroom\n• Kapasitas +/- 1.500 (on construction)\n• Kapasitas +/- 1.000 (Existing)\n• Kapasitas +/- 400 (Existing)')">
                            <p class="gallery-caption-overlay">Ballroom</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/lobby.jpg')}}" alt="Lobby" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/lobby.jpg') }}', 'Lobby\n• Luxurious entrance\n• Spacious seating area for guests')">
                            <p class="gallery-caption-overlay">Lobby</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/lobby2.jpg')}}" alt="Lobby 2" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/lobby2.jpg') }}', 'Lobby 2\n• Modern decor\n• Comfortable waiting area')">
                            <p class="gallery-caption-overlay">Restaurant</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/lobby3.jpg')}}" alt="Lobby 3" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/lobby3.jpg') }}', 'Lobby 3\n• Elegant design\n• Accessible for all tenants')">
                            <p class="gallery-caption-overlay">Meeting Room</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/pool.jpg')}}" alt="Pool" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/pool.jpg') }}', 'Pool\n• Relaxing pool area\n• Open for tenants and guests')">
                            <p class="gallery-caption-overlay">Pool</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/meetingroom.jpg')}}" alt="Meeting Room" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/meetingroom.jpg') }}', 'Meeting Room\n• Kerinci MR (94,2M)\n• Tangkuban Perahu (57,3M)\n• Cendrawasih MR (140,5M)\n• Motui MR (51,93M)\n• Bromo MR (80,37M)\n• Rinjani MR(58,29)\n• Halmahera MR(64,72M)\n• Borobudur MR #1 (114,7M)\n• Borobudur MR #2(100,9M)\n• Borneo MR(108,23M)\n• Merbabu MR(45,2M)\n')">
                            <p class="gallery-caption-overlay">Meeting Room</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/lift.jpg')}}" alt="Access Lift" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/lift.jpg') }}', 'Access Lift\n• Easy access for all floors\n• High-speed elevators')">
                            <p class="gallery-caption-overlay">Access Lift</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/parking.jpg')}}" alt="Parking" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/parking.jpg') }}', 'Parking\n• Spacious parking lot\n• Security monitoring 24/7')">
                            <p class="gallery-caption-overlay">Parking</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/kantin.jpg')}}" alt="Kantin" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/kantin.jpg') }}', 'Kantin\n• Variety of food options\n• Affordable prices for tenants')">
                            <p class="gallery-caption-overlay">Kantin</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="image-caption-container">
                            <img src="{{asset('frontend/assets/images/security.png')}}" alt="Kantin" class="img-fluid"
                                onclick="openModal('{{ asset('frontend/assets/images/security.png') }}', 'Security\n• 24/7 Protection\n• CCTV')">
                            <p class="gallery-caption-overlay">Security</p>
                        </div>
                    </div>
                </div>
                <!-- Add more gallery items as needed -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JavaScript to handle modal image and description -->
    <script>
        function openModal(imageSrc, description) {
            document.getElementById("modalImage").src = imageSrc;
            const descriptionList = document.getElementById("modalDescription");
            descriptionList.innerHTML = ""; // Clear previous content

            // Create list items for each line in the description
            const lines = description.split('\n');
            lines.forEach(line => {
                const listItem = document.createElement('li');
                listItem.textContent = line;
                descriptionList.appendChild(listItem);
            });

            const modal = new bootstrap.Modal(document.getElementById("galleryModal"));
            modal.show();
        }
    </script>
@endpush
