

<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="info">
                    <li><i class="fa fa-envelope"></i> info@nttower.com</li>
                    <li><i class="fa fa-map"></i>Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <h1>NT TOWER</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="active">Beranda</a></li>
                        <!-- Profil Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="profilDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                                <li><a class="dropdown-item" href="{{ route('tentang-kami')}}">Tentang Kami</a></li>
                                <li><a class="dropdown-item" href="{{ route('direktori-tenan')}}">Direktori Tenan</a></li>
                                <li><a class="dropdown-item" href="{{ route('fasilitas')}}">Fasilitas</a></li>
                            </ul>
                        </li>
                        <li><a href="properties.html">Disewakan</a></li>
                        <li><a href="peraturan.html">Peraturan & Regulasi</a></li>
                        <!-- Berita Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="beritaDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Berita
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                                <li><a class="dropdown-item" href="whatson.html">What's On</a></li>
                                <li><a class="dropdown-item" href="videos.html">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Kontak</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->