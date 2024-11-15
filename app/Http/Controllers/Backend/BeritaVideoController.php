<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BeritaVideoDataTable;
use App\Http\Controllers\Controller;
use App\Models\BeritaVideo;
use Illuminate\Http\Request;

class BeritaVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BeritaVideoDataTable $dataTable)
    {
        return $dataTable->render('backend.berita-video.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.berita-video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'youtube_url' => ['required', 'url'],
        ]);

        $beritaVideo = new BeritaVideo();
        $beritaVideo->youtube_url = $request->youtube_url;
        $beritaVideo->save();

        flash('Youtube Url berhasil ditambah', 'success');

        return redirect()->route('admin-berita-video.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $beritaVideo = BeritaVideo::findOrFail($id);
        
        $beritaVideo->delete();

        return response(['status'=>'success', 'message'=>'Youtube Url Berhasil Dihapus']);
    }
}
