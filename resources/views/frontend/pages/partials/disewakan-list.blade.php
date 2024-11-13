<div class="row properties-box">
    @foreach ($disewakans as $disewakan)
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
            <div class="item">
                <a href="{{ route('disewakan-detail', $disewakan->slug) }}">
                    <img src="{{ asset($disewakan->thumb_image) }}" alt="">
                </a>
                <span class="category">{{ $disewakan->kategori_properti }}</span>
                <h4>
                    <a href="{{ route('disewakan-detail', $disewakan->slug) }}">{{ $disewakan->nama_properti }}</a>
                </h4>
                <ul>
                    <li>Net. Area: <span>{{ $disewakan->net_area }}m2</span></li>
                    <li>Status: <span>{{ statusDisewakan($disewakan->status_properti) }}</span></li>
                    <li>Zona: <span>{{ zonaDisewakan($disewakan->zona_properti) }}</span></li>
                </ul>
                <div class="main-button">
                    <a href="{{ route('disewakan-detail', $disewakan->slug) }}">Lihat Detil</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="d-flex justify-content-center">
        {{ $disewakans->links() }}
    </div>
</div>