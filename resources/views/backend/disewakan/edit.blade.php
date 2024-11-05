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
                            <form action="{{route('admin-disewakan.update', $disewakan->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img src="{{asset($disewakan->thumb_image)}}" style="width:200px" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="thumb_image">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Kategori Properti</label>
                                    <select id="inputState" class="form-control" name="kategori_properti">
                                        <option value="">Select</option>
                                        <option {{$disewakan->kategori_properti == 'perkantoran' ? 'selected' : ''}} value="perkantoran">Perkantoran</option>
                                        <option {{$disewakan->kategori_properti == 'komersial' ? 'selected' : ''}} value="komersial">Komersial</option>
                                        <option {{$disewakan->kategori_properti == 'retail' ? 'selected' : ''}} value="retail">Retail</option>
                                        <option {{$disewakan->kategori_properti == 'gudang' ? 'selected' : ''}} value="gudang">Gudang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Properti</label>
                                    <input type="text" class="form-control" name="nama_properti" value="{{$disewakan->nama_properti}}">
                                </div>
                                <div class="form-group">
                                    <label>Net. Area</label>
                                    <input type="number" class="form-control" name="net_area" value="{{$disewakan->net_area}}">
                                </div>
                                <div class="form-group">
                                    <label>Status Properti</label>
                                    <select id="inputState" class="form-control" name="status_properti">
                                        <option {{$disewakan->status_properti == '1' ? 'selected' : '0'}} value="1">Disewakan</option>
                                        <option {{$disewakan->status_properti == '0' ? 'selected' : '0'}} value="0">Tidak Disewakan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi_properti" class="form-control summernote">{!! $disewakan->deskripsi_properti !!}</textarea>
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
