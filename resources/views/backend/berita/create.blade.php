@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Berita Baru</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Berita</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin-berita.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Gambar Berita</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" name="judul_berita" value="{{old('judul_berita')}}">
                                </div>
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea name="isi_berita" class="form-control summernote"></textarea>
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
