@extends('frontend.layouts.master')

@section('content')
    <div class="page-heading header-text b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">NT Tower</a></span>
                    <h3>TENTANG KAMI</h3>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section section-padding" id="section_1">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center mb-5" id="myTab" role="tablist" style="margin-top: 50px;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                        type="button" role="tab" aria-controls="tab1" aria-selected="true">1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                        role="tab" aria-controls="tab2" aria-selected="false">2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                        role="tab" aria-controls="tab3" aria-selected="false">3</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <h3 class="mb-3">NT Tower Opportunity & Profitable</h3>
                            <p style="text-align: justify;">NT Tower adalah gedung perkantoran, hotel dan Nusantara TV yang
                                dilengkapi fasilitas terkini, termegah, dan termodern yang berdiri kokoh di antara
                                Gedung-gedung pencakar langit di Jakarta. NT Tower dibawah manajemen PT NT Fam yang
                                merupakan anak usaha dari NT Corp. NT Tower terletak di Jalan protokol Jenderal Ahmad Yani
                                berada di sisi pintu masuk/exit Tol Cempaka Putih dan pintu masuk/exit Tol Rawamangun dengan
                                akses langsung menuju Bandara Halim Perdana Kusuma, Bandara Soekarno Hatta, dekat dengan
                                Kelapa Gading, serta dekat dengan pusat perkantoran dan pemerintahan.</p>
                            <br>
                            <p style="text-align: justify;">NT Tower terdiri dari main tower (37 lantai), podium (15
                                lantai), dan wing tower (18 lantai). Holding NT Corp akan berkantor di main tower sebanyak 7
                                lantai, sisanya akan diperuntukan sebagai ruang perkantoran yang disewakan dan peruntukan
                                hotel 14 lantai (Lantai 21-36).</p>
                            <br>
                            <p style="text-align: justify;">Gedung NT Tower dengan luas tanah 8.986 m2 dan luas total
                                bangunan (gross building area) 65.189 m2, dengan komposisi luas gross floor area (GFA)
                                64.438 m2. Pada lantai 4 dan 5 terdapat function hall/grand ball room (kapasitas +1.000
                                orang). Pada lantai 9, 10 dan 11 terdapat studio Nusantara TV terdiri dari 6 studio
                                pendukung (1 studio produksi dan 5 studio news) serta studio dubbing dan digital command
                                center area. Pada lantai 12,15 dan 16 terdapat Grand Studio (kapasitas +1500 orang).</p>
                            <br>
                            <p style="text-align: justify;">Gedung NT Tower sebagai gedung perkantoran, hotel, dan studio
                                Nusantara TV merupakan upaya NT Corp dalam berkontribusi terhadap perekonomian bangsa dari
                                berbagai sektor, baik agrobisnis, energi, juga industri media. Wujud sumbangsih dan
                                partisipasi NT Corp dalam membangun ekonomi bangsa, melalui agrobisnis dan hilirisasi.</p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <img src="{{ asset('frontend/assets/images/oppo.jpg') }}" alt="NT Tower Image"
                                class="img-fluid mb-3">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <h3 class="mb-3">NT Tower dengan konsep “SMART & GREEN BUILDING”</h3>
                            <p style="text-align: justify;"><b>Basic Green Area.</b> Untuk kawasan bangunan baru, maka
                                lansekap yang terbebas dari struktur basement minimal 10% dari luas lahan. Dalam hal ini
                                telah memenuhi yaitu sebesar 12% atau 765 m2 dari luas lahan 6.320 m2.</p>
                            <br>
                            <p style="text-align: justify;"><b>Green Energy.</b> NT Tower mendukung program energi hijau
                                dengan memasang solar sel dan charging station untuk EV.</p>
                            <br>
                            <p style="text-align: justify;"><b>Nilai OTTV Bangunan.</b> OTTV (Overall thermal transfer
                                value) atau nilai perpindahan termal menyeluruh untuk bangunan hemat energi, harus lebih
                                kecil dari 45 w/m2. Nilai OTTV Alternatif Fasad 1 = 42,93 w/m2; Nilai OTTV Alternatif Fasad
                                2 = 41,41 w/m2.</p>
                            <br>
                            <p style="text-align: justify;"><b>Lansekap Pada Lahan.</b> 50% lahan tertutupi tajuk tanaman,
                                dan seluruh vegetasi merupakan tanaman lokal.</p>
                            <br>
                            <p style="text-align: justify;"><b>Transportasi Umum.</b> Tersedianya fasilitas halte
                                transportasi umum dengan jarak kurang dari 300 m walking distance dari bangunan.</p>
                            <br>
                            <p style="text-align: justify;"><b>Fasilitas Pengguna Sepeda.</b> Jumlah parkir sepeda 100 unit,
                                dan ditambah fasilitas shower bagi pengguna sepeda sebanyak 10 unit.</p>
                            <br>
                            <p style="text-align: justify;"><b>Fasilitas Pada Tapak.</b> Tapak dilengkapi dengan 8 fasilitas
                                perkotaan: Jaringan Jalan, Jaringan Penerangan dan listrik, Jaringan Drainase, Jalur Pejalan
                                kaki Kawasan, STP Kawasan, Jaringan Fiber Optik, Jaringan Telepon dan Jaringan Air Bersih.
                            </p>
                            <br>
                            <p style="text-align: justify;"><b>Pencahayaan Alami.</b> Untuk menghemat pemakaian listrik pada
                                siang hari, ruangan di dalam bangunan mendapatkan pencahayaan alami lebih dari 30% luas
                                bangunan.</p>
                            <br>
                            <p style="text-align: justify;"><b>Sistem Air Conditioning (AC).</b> Sistem AC menggunakan split
                                duck, yang diatur suhu terendah dalam ruangan 25°C, dan kelembaban dalam ruang 60%.</p>
                            <br>
                            <p style="text-align: justify;"><b>Sistem Penerangan Otomatis.</b> Lux sensor untuk otomatisasi
                                pencahayaan buatan apabila intensitas cahaya alami kurang dari 300 lux. Menggunakan lampu
                                hemat energi, ex LED.</p>
                            <br>
                            <p style="text-align: justify;"><b>Ventilasi Alami.</b> Untuk menghemat AC, maka area toilet,
                                tangga, koridor, dan lobi lift, menggunakan ventilasi alami atau mekanik.</p>
                            <br>
                            <p style="text-align: justify;"><b>Sun Shading pada Bangunan.</b> Untuk mengurangi panas
                                matahari yang masuk pada bangunan sun shading horisontal 90 cm ditambah dengan secondary
                                fasad pada podium.</p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <img src="{{ asset('frontend/assets/images/green.jpg') }}" alt="NT Tower Image"
                                class="img-fluid mb-3">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <h3 class="mb-3">Sejarah NT Tower</h3>
                            <p style="text-align: justify;"><b>17 Agustus 2017: Peletakan batu pertama (ground breaking) NT
                                    Tower.</b> Peletakan batu pertama pembangunan NT Tower sekaligus memperingati HUT RI
                                Ke-72 merupakan moment bersejarah bagi Keluarga Besar NT Corp dibawah komando Dr. Ir. Nurdin
                                Tampubolon, MM ini dan terasa sangat istimewa karena dihadiri oleh sejumlah Menteri dan
                                Pejabat Negara, juga tokoh-tokoh nasional. Diantara yang hadir Jenderal (Purn.) Wiranto,
                                Agus Martowardojo, Moeldoko, Edy Rahmayadi, Otto Hasibuan, Anggota DPR RI, Sukur Nababan,
                                Maruarar Sirait, dan Akbar Faizal serta Keluarga Besar NT Corp dan para kolega, relasi, dan
                                kerabat.</p>
                            <br>
                            <p style="text-align: justify;"><b>4 November 2020: Pengeboran Bor Pile & Start Pembangunan NT
                                    Tower.</b> Pengeboran pondasi Bore Pile dan start pembangunan NT Tower secara resmi
                                dilakukan. Adapun pelaksanaan kegiatan tersebut langsung dilakukan oleh Dr. Nurdin
                                Tampubolon, selaku pendiri NT Corp. Dalam kesempatan tersebut, hadir sejumlah jajaran
                                direksi juga melakukan peresmian pengeboran dengan menekan tombol pengerjaan proyek
                                pembangunan gedung NT Tower. Dalam peresmian tersebut dihadiri Ika, cucu Wapres Ma’ruf Amin,
                                Camat Pulogadung, Bambang Pangestu, Lurah Kayu Putih, Artika Ristiana, Kapolsek Pulogadung
                                Kompol Beddy Suwendy, Danramil Pulogadung, Kapten Elba Priambodo serta Ustadz Hanafi.</p>
                            <br>
                            <p style="text-align: justify;"><b>20 Oktober 2023: Topping of NT Tower.</b> PT NT Fam, anak
                                usaha dari Nurdin Tampubolon Corporation (NT Corp), menggelar acara Topping Off Ceremony
                                atau peletakan batu terakhir untuk gedung NT Tower yang terletak di Jalan Jenderal Ahmad
                                Yani, Pulomas, Jakarta Timur. Acara Topping Off ini ditandai dengan penekanan sirene oleh
                                Wakil Presiden Republik Indonesia (Wapres RI), K.H Ma’ruf Amin yang didampingi oleh Presiden
                                Komisaris NT Corporation, Dr. Ir. Nurdin Tampubolon, M.M., dan Ketua KPI Pusat Ubaidillah.
                                Acara Topping Off Ceremony NT Tower diisi dengan serangkaian acara, seperti pidato sambutan
                                dari Wapres dan Presiden Komisaris NT Corp, serta lainnya.</p>
                            <br>
                            <p style="text-align: justify;">Adapun usai acara utama, Wapres, Presiden Komisaris NT Corp,
                                Anggota Komisi VI DPR RI Sondang Tampubolon, serta Ketua KPI Pusat, melakukan peninjauan
                                fasilitas studio penyiaran televisi yang ada di NT Tower. Di antaranya Studio Bali, Studio
                                Toba, Studio Anggrek, Studio Mawar, serta Studio Melati.</p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <div class="text-center">
                                <!-- Image with Overlay Caption -->
                                <div class="image-caption-container">
                                    <img src="{{ asset('frontend/assets/images/tentangkami1.jpg') }}" alt="NT Tower Image"
                                        class="img-fluid mb-3">
                                    <p class="caption-overlay">17 Agustus 2017: Peletakan batu pertama (ground breaking) NT
                                        Tower</p>
                                </div>

                                <div class="image-caption-container">
                                    <img src="{{ asset('frontend/assets/images/tentangkami2.jpg') }}" alt="NT Tower Image"
                                        class="img-fluid mb-3">
                                    <p class="caption-overlay">4 November 2020: Pengeboran Bor Pile & Start Pembangunan NT
                                        Tower</p>
                                </div>

                                <div class="image-caption-container">
                                    <img src="{{ asset('frontend/assets/images/tentangkami3.jpg') }}" alt="NT Tower Image"
                                        class="img-fluid mb-3">
                                    <p class="caption-overlay">20 Oktober 2023: Topping of NT Tower</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
