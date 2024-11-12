<?php

namespace App\Http\Controllers;

use App\Models\BeritaVideo;
use App\Models\Disewakan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tentangKami()
    {
        return view('frontend.pages.tentangkami');
    }

    public function direktoriTenan()
    {
        return view('frontend.pages.direktori-tenan');
    }

    public function fasilitas()
    {
        return view('frontend.pages.fasilitas');
    }

    public function disewakan()
    {
        $disewakans = Disewakan::paginate(3);
        return view('frontend.pages.disewakan', compact('disewakans'));
    }

    public function disewakanDetail(string $slug)
    {
        $disewakan = Disewakan::where('slug', $slug)->first();
        return view('frontend.pages.disewakan-detail', compact('disewakan'));
    }

    public function peraturanRegulasi()
    {
        return view('frontend.pages.peraturan-regulasi');
    }

    public function beritaWhatson()
    {
        return view('frontend.pages.berita-whatson');
    }

    public function beritaVideo()
    {
        $beritaVideos = BeritaVideo::get();
        return view('frontend.pages.berita-video', compact('beritaVideos'));
    }

    public function kontak()
    {
        return view('frontend.pages.kontak');
    }
}
