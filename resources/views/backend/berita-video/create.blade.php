@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add New Youtube Url For Berita Video</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Youtube Video Url</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin-berita-video.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Youtube Url</label>
                                    <input type="text" class="form-control" name="youtube_url" value="{{old('youtube_url')}}">
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
