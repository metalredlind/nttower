<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DisewakanImageGalleryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Disewakan;
use App\Models\DisewakanImageGallery;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class DisewakanImageGalleryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,DisewakanImageGalleryDataTable $dataTable)
    {
        $disewakan = Disewakan::findOrfail($request->disewakan);
        return $dataTable->render('backend.disewakan.image-gallery.index', compact('disewakan'));

        // return view('backend.disewakan.image-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => ['required', 'image', 'max:2048'],

        ]);

        //Handle multiple image uploads
        $imagePaths = $this->uploadMultiImage($request, 'image', 'uploads');

        foreach($imagePaths as $path){
            $disewakanImageGallery = new DisewakanImageGallery();
            $disewakanImageGallery->image = $path;
            $disewakanImageGallery->disewakan_id = $request->disewakan;
            $disewakanImageGallery->save();
        }

        flash('Foto berhasil diupload', 'success');
        
        return redirect()->back();
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
        $disewakanImage = DisewakanImageGallery::findOrFail($id);
        $this->deleteImage($disewakanImage->image);
        $disewakanImage->delete();

        return response(['status' => 'success', 'message' => "Foto telah berhasil dihapus dari galery"]);
    }
}
