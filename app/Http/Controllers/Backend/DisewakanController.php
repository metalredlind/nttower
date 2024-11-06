<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DisewakanDataTable;
use App\Http\Controllers\Controller;
use App\Models\Disewakan;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Str;

class DisewakanController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(DisewakanDataTable $dataTable)
    {
        return $dataTable->render('backend.disewakan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.disewakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048'],
            'kategori_properti' => ['required'],
            'nama_properti' => ['required'],
            'net_area' => ['required'],
            'zona_properti' => ['required'],
            'status_properti' => ['required'],
            'deskripsi_properti' => ['required'],
        ]);

        //Handle image upload
        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $disewakan = new Disewakan();
        $disewakan->thumb_image = $imagePath;
        $disewakan->kategori_properti = $request->kategori_properti;
        $disewakan->nama_properti = $request->nama_properti;
        $disewakan->slug = Str::slug($request->nama_properti);
        $disewakan->net_area = $request->net_area;
        $disewakan->zona_properti = $request->zona_properti;
        $disewakan->status_properti = $request->status_properti;
        $disewakan->deskripsi_properti = $request->deskripsi_properti;
        $disewakan->save();

        flash('Properti berhasil ditambah', 'success');

        return redirect()->route('admin-disewakan.index');
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
        $disewakan = Disewakan::findOrFail($id);
        return view('backend.disewakan.edit', compact('disewakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2048'],
            'kategori_properti' => ['required'],
            'nama_properti' => ['required'],
            'net_area' => ['required'],
            'zona_properti' => ['required'],
            'status_properti' => ['required'],
            'deskripsi_properti' => ['required'],
        ]);

        $disewakan = Disewakan::findOrFail($id);

        //Handle image upload
        $imagePath = $this->updateImage($request, 'image', 'uploads', $disewakan->thumb_image);

        $disewakan->thumb_image = empty(!$imagePath) ? $imagePath : $disewakan->thumb_image;
        $disewakan->kategori_properti = $request->kategori_properti;
        $disewakan->nama_properti = $request->nama_properti;
        $disewakan->slug = Str::slug($request->nama_properti);
        $disewakan->net_area = $request->net_area;
        $disewakan->zona_properti = $request->zona_properti;
        $disewakan->status_properti = $request->status_properti;
        $disewakan->deskripsi_properti = $request->deskripsi_properti;
        $disewakan->save();

        flash('Properti berhasil diubah', 'success');

        return redirect()->route('admin-disewakan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disewakan = Disewakan::findOrFail($id);
        //delete the main product image
        $this->deleteImage($disewakan->thumb_image);

        $disewakan->delete();

        return response(['status'=>'success', 'message'=>'Properti Berhasil Dihapus']);
    }
}
