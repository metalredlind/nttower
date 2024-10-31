<?php

namespace App\Http\Controllers;

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
}
