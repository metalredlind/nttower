<?php

namespace App\Http\Controllers;

use App\Models\BeritaVideo;
use App\Models\Disewakan;
use App\Models\Fasilitas;
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
        $fasilitas = Fasilitas::paginate(9);
        return view('frontend.pages.fasilitas', compact('fasilitas'));
    }

    public function disewakan(Request $request)
    {
        $query = Disewakan::query();

        // Check and apply 'zona_properti' filter
        if ($request->filled('zona')) {
            $query->where('zona_properti', $request->zona);
        }

        // Check and apply 'nama_properti' filter
        if ($request->filled('lantai')) {
            $query->where('nama_properti', $request->lantai);
        }

        // Apply sorting if specified
        if ($request->filled('sort')) {
            if ($request->sort === 'floor-asc') {
                $query->orderBy('net_area', 'asc');
            } elseif ($request->sort === 'floor-desc') {
                $query->orderBy('net_area', 'desc');
            }
        }

        // Get paginated results
        $disewakans = $query->paginate(9);

        // Check if AJAX request for partial view
        if ($request->ajax()) {
            return view('frontend.pages.partials.disewakan-list', compact('disewakans'))->render();
        }

        // Return main view for full page load
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
