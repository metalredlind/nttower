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
                            <form action="{{route('admin-fasilitas.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="text" class="form-control" name="nama_fasilitas" value="{{old('nama_properti')}}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Fasilitas</label>
                                    <textarea name="deskripsi_fasilitas" class="form-control summernote"></textarea>
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
