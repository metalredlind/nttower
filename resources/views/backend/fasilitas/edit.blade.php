@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create New Fasilitas</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Fasilitas</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin-fasilitas.update', $fasilitas->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img src="{{asset($fasilitas->thumb_image)}}" style="width:200px" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="text" class="form-control" name="nama_fasilitas" value="{{$fasilitas->nama_fasilitas}}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Fasilitas</label>
                                    <textarea name="deskripsi_fasilitas" class="form-control summernote">{!! $fasilitas->deskripsi_fasilitas !!}</textarea>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
