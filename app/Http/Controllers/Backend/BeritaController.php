<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BeritaDataTable;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Str;

class BeritaController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(BeritaDataTable $dataTable)
    {
        return $dataTable->render('backend.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048'],
            'judul_berita' => ['required'],
            'isi_berita' => ['required']
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $berita = new Berita();
        $berita->image = $imagePath;
        $berita->judul_berita = $request->judul_berita;
        $berita->slug = Str::slug($request->judul_berita);
        $berita->isi_berita = $request->isi_berita;

        $berita->save();
        
        flash('Berita berhasil ditambah', 'success');

        return redirect()->route('admin-berita.index');
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
        $berita = Berita::findOrFail($id);
        return view('backend.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:2048'],
            'judul_berita' => ['required'],
            'isi_berita' => ['required']
        ]);

        $berita = Berita::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $berita->image);

        $berita->image = empty(!$imagePath) ? $imagePath : $berita->image;
        $berita->judul_berita = $request->judul_berita;
        $berita->slug = Str::slug($request->judul_berita);
        $berita->isi_berita = $request->isi_berita;

        $berita->save();
        
        flash('Berita berhasil diubah', 'success');

        return redirect()->route('admin-berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        //delete the main product image
        $this->deleteImage($berita->image);

        $berita->delete();

        return response(['status'=>'success', 'message'=>'Berita Berhasil Dihapus']);
    }
}
