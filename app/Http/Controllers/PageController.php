<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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

        if ($request->has('zona') && $request->zona != '') {
            $query->where('zona_properti', $request->zona);
        }

        if ($request->has('lantai') && $request->lantai != '') {
            $query->where('nama_properti', $request->lantai); // Use nama_properti for filtering
        }

        if ($request->has('sort') && $request->sort != '') {
            $sort = $request->sort;
            if ($sort === 'floor-asc') {
                $query->orderBy('nama_properti', 'asc');
            } elseif ($sort === 'floor-desc') {
                $query->orderBy('nama_properti', 'desc');
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
        $beritas = Berita::paginate(9);
        return view('frontend.pages.berita-whatson', compact('beritas'));
    }

    public function beritaWhatsonDetail(string $slug)
    {
        $beritas = Berita::where('slug', $slug)->first();

        // Fetch 5 artikel terbaru
        $artikelTerbaru = Berita::where('slug', '!=', $slug)
                            ->orderBy('updated_at', 'desc') // Sort by most recent
                            ->take(5) // Limit to 5 
                            ->get();

        return view('frontend.pages.berita-whatson-detail', compact('beritas', 'artikelTerbaru'));
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

    public function getLantaiOptions(Request $request)
    {
        $zona = $request->input('zona');
        $lantaiOptions = Disewakan::where('zona_properti', $zona)->get(['nama_properti']); // Fetch floor names based on zona_properti

        return response()->json(['lantai' => $lantaiOptions]);
    }
}
