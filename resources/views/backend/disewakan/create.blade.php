@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create New Properti untuk Disewakan</h1>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Disewakan</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Kategori Properti</label>
                                    <input type="text" class="form-control" name="kategori_properti" value="{{old('jenis_industri')}}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Properti</label>
                                    <input type="text" class="form-control" name="nama_properti" value="{{old('nama_brand')}}">
                                </div>
                                <label>PIC</label>
                                <div class="form-group">
                                    <label>Net. Area</label>
                                    <input type="text" class="form-control" name="net_area" value="{{old('pic_brand_nama')}}">
                                </div>
                                <div class="form-group">
                                    <label>Status Properti</label>
                                    <input type="text" class="form-control" name="status_properti" value="{{old('pic_brand_jabatan')}}">
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
