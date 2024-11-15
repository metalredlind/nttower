@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>List Fasilitas</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Fasilitas</h4>
                            <div class="card-header-action">
                                <a href="{{route('admin-fasilitas.create')}}" class="btn btn-primary">
                                    + Add New
                                </a>
                            </div>
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
