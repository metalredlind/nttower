<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\FasilitasDataTable;
use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(FasilitasDataTable $dataTable)
    {
        return $dataTable->render('backend.fasilitas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048'],
            'nama_fasilitas' => ['required'],
            'deskripsi_fasilitas' => ['required'],
        ]);

        //Handle image upload
        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $fasilitas = new Fasilitas();
        $fasilitas->thumb_image = $imagePath;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
        $fasilitas->save();

        flash('Fasilitas berhasil ditambah', 'success');

        return redirect()->route('admin-fasilitas.index');
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
        $fasilitas = Fasilitas::findOrFail($id);
        return view('backend.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable' ,'image', 'max:2048'],
            'nama_fasilitas' => ['required'],
            'deskripsi_fasilitas' => ['required'],
        ]);

        $fasilitas = Fasilitas::findOrFail($id);

        //Handle image upload
        $imagePath = $this->updateImage($request, 'image', 'uploads', $fasilitas->thumb_image);

        $fasilitas->thumb_image = empty(!$imagePath) ? $imagePath : $fasilitas->thumb_image;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
        $fasilitas->save();

        flash('Fasilitas berhasil diubah', 'success');

        return redirect()->route('admin-fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        //delete the main product image
        $this->deleteImage($fasilitas->thumb_image);
        
        $fasilitas->delete();

        return response(['status'=>'success', 'message'=>'Fasilitas Berhasil Dihapus']);
    }
}
