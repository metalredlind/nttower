@extends('backend.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">

        <div class="section-header">
          <h1>Property Images Gallery</h1>
        </div>
  
        <div class="section-body">
          <div class="mb-3">
            <a href="{{route('admin-disewakan.index')}}" class="btn btn-primary">< Back</a>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Property: {{$disewakan->nama_properti}}</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{route('admin-disewakan-image-gallery.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="">Image <code>(Multiple Image Supported)</code> </label>
                          <input type="file" name="image[]" class="form-control" multiple>
                          <input type="hidden" name="disewakan" value="{{$disewakan->id}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Images</h4>
                </div>
                <div class="card-body">
                  {{ $dataTable->table() }}
              </div>
              </div>
            </div>
          </div>
  
        </div>
        
      </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }};
@endpush
