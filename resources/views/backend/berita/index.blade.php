@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>List Berita di Nt Tower</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Berita</h4>
                            <div class="card-header-action">
                                <a href="{{route('admin-berita.create')}}" class="btn btn-primary">
                                    + Add New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                {{ $dataTable->table() }}
                            </div>
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