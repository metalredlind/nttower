@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>DIREKTORI TENAN</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="direktoritenan section">
        <div class="container">
            <div class="row">
                <!-- Left Column: Large Building Image -->
                <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/images/building.jpg')}}" alt="Building Image" class="img-fluid">
                </div>

                <!-- Right Column: Tabs and Floor List -->
                <div class="col-lg-6">
                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs justify-content-center mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="office-tab" data-bs-toggle="tab" data-bs-target="#office"
                                type="button" role="tab" aria-controls="office" aria-selected="true">
                                <img src="{{asset('frontend/assets/images/office-icon.png')}}" alt="" style="width: 24px;"> Perkantoran
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others"
                                type="button" role="tab" aria-controls="others" aria-selected="false">
                                <img src="{{asset('frontend/assets/images/others-icon.png')}}" alt="" style="width: 24px;"> Lainnya
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Perkantoran Content -->
                        <div class="tab-pane fade show active" id="office" role="tabpanel" aria-labelledby="office-tab">
                            <!-- Accordion for Floor Details -->
                            <div class="accordion" id="floorAccordion">

                                <!-- Floor 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            Lantai 5
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Pre-Function, Ball Room</li>
                                                <li>Meeting Room</li>
                                                <ul>
                                                    <li>Kerinci MR (94.2 m<sup>2</sup>)</li>
                                                    <li>Tangkuban Perahu MR (57.3 m<sup>2</sup>)</li>
                                                    <li>Cendrawasih MR (140.5 m<sup>2</sup>)</li>
                                                </ul>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floor 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Lantai 6
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Meeting Room</li>
                                                <ul>
                                                    <li>Motui MR (51.93 m<sup>2</sup>)</li>
                                                    <li>Bromo MR (80.37 m<sup>2</sup>)</li>
                                                    <li>Rinjani MR (58.29 m<sup>2</sup>)</li>
                                                    <li>Halmahera MR (64.72 m<sup>2</sup>)</li>
                                                    <li>Borobudur #1 MR (114.7 m<sup>2</sup>)</li>
                                                    <li>Borobudur #2 MR (100.9 m<sup>2</sup>)</li>
                                                    <li>Borneo MR (108.23 m<sup>2</sup>)</li>
                                                    <li>Merbabu MR (45.2 m<sup>2</sup>)</li>
                                                </ul>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floor 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Lantai 7
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>PT Bangkitgiat Usaha Mandiri (PT BUM)</li>
                                                <li>PT Nusantara Industri Sejati (PT NIS)</li>
                                                <li>PT Industri Smelter Nusantara (PT ISN)</li>
                                                <li>PT Nusantara Energi Permata (PT NEP)</li>
                                                <li>PT Nusantara Kreasi Konstruksi (PT NKK)</li>
                                                <li>PT NT FAM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floor 9 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Lantai 9 (PT Nusantara Media Mandiri)
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Studio Nusantara</li>
                                                <li>Nusantara VIP</li>
                                                <li>Bunaken VIP Meeting Room</li>
                                                <li>Toba Studio</li>
                                                <li>Toba VIP Room</li>
                                                <li>Bali Studio</li>
                                                <li>Bali VIP Room</li>
                                                <li>Labuan Bajo Meeting Room</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floor 10 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false"
                                            aria-controls="collapse10">
                                            Lantai 10 (PT Nusantara Media Mandiri)
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Studio Nusantara</li>
                                                <li>Raja Ampat Meeting Room</li>
                                                <li>Presenter Room</li>
                                                <li>Executive Department</li>
                                                <li>News Room</li>
                                                <li>Melati Studio</li>
                                                <li>Mawar Studio</li>
                                                <li>Anggrek Studio</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floor 11 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false"
                                            aria-controls="collapse11">
                                            Lantai 11 (PT Nusantara Media Mandiri)
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                        data-bs-parent="#floorAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Technic & Programming Department</li>
                                                <li>Supporting Department</li>
                                                <li>Finance & Accounting Department</li>
                                                <li>Sales & Marketing Department</li>
                                                <li>Digital Support Center</li>
                                                <li>Dubbing Studio</li>
                                                <li>Digital Command Center Area</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lainnya Content -->
                        <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                            <!-- Accordion for Lainnya Details -->
                            <div class="accordion" id="othersAccordion">
                                <!-- Floor 25-52 (Hotel: Novotel) -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading25">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false"
                                            aria-controls="collapse25">
                                            Lantai 25-52 (Hotel)
                                        </button>
                                    </h2>
                                    <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                        data-bs-parent="#othersAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Novotel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading26">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false"
                                            aria-controls="collapse26">
                                            New & Huge LED Screen NT Tower
                                        </button>
                                    </h2>
                                    <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26"
                                        data-bs-parent="#othersAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><strong>"The Best Advertising Location for Your Product"</strong></li>
                                                <br>
                                                <li><strong>"Super Large Size Display 16 X 25.6 Meter"</strong></li>
                                                <br>
                                                <li><strong>"The Only LED Billboard Along The Wiyoto Wiyono Toll Road And
                                                        Ahmad Yani Road"</strong></li>
                                                <br>
                                                <li><strong>TRAFFIC +/- 521.532 (vehicles/day)</strong></li>
                                                <ul>
                                                    <li>- Jalan Tol Wiyoto Wiyono: +/- 300,000 (80% of maximum capacity,
                                                        source: CMNP Toll)</li>
                                                    <br>
                                                    <li>- Jl. Jenderal Ahmad Yani: 221,532 (Source: Traffic Control Dinas
                                                        Perhubungan DKI Jakarta)</li>
                                                </ul>
                                                <br>
                                                <br>
                                                <li><strong>LOCATION</strong></li>
                                                <ul>
                                                    <li><strong>Address:</strong> Jl. Ahmad Yani, Jakarta Timur</li>
                                                    <li><strong>View:</strong> Cawang/DI Panjaitan to Cempaka Putih/Kelapa
                                                        Gading</li>
                                                </ul>
                                                <br>
                                                <br>
                                                <li><strong>LED SPECIFICATION</strong></li>
                                                <ul>
                                                    <li><strong>Display Size:</strong> 16,000 (w) x 25.60 (h) mm</li>
                                                    <li><strong>Type:</strong> L-Shape Curved LED Screen</li>
                                                </ul>
                                                <br>
                                                <br>
                                                <li><strong>LED OPERATIONAL DISPLAY</strong></li>
                                                <ul>
                                                    <li><strong>Schedules:</strong> 06:00 – 24:00 (18 hours/day)</li>
                                                    <li><strong>Duration:</strong> 15 sec/spot</li>
                                                    <li><strong>Share:</strong> 8 brands/clients</li>
                                                </ul>
                                                <br>
                                                <br>
                                                <li><strong>POINT OF INTEREST</strong></li>
                                                <ul>
                                                    <li>Jl. Tol Wiyoto Wiyono</li>
                                                    <li>Jl. Jenderal Ahmad Yani</li>
                                                    <li>Jl. Letjend Soeprapto</li>
                                                    <li>Holland Village</li>
                                                    <li>ITC Cempaka Mas</li>
                                                    <li>Kawasan Kelapa Gading (Mall of Indonesia, Artha Gading, Mall Kelapa
                                                        Gading, Restaurant Boulevard)</li>
                                                    <li>Kemayoran-Pelabuhan Tanjung Priok</li>
                                                    <li>Universitas Jayabaya, Trisakti, Kalbis, UNJ</li>
                                                    <li>Kawasan Rawamangun</li>
                                                    <li>Apartemen Green Pramuka</li>
                                                    <li>Jakarta Golf Club</li>
                                                    <li>Taman Impian Jaya Ancol</li>
                                                    <li>Sunter Agung Podomoro & Sedayu</li>
                                                    <li>Pasar Senen</li>
                                                    <li>Hotel Borobudur</li>
                                                    <li>Istana Negara</li>
                                                    <li>RS Pertamina Jaya</li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
