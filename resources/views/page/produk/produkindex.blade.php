@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Visitors</h5>
                    <span class="text-muted">For more details about usage, please refer <a
                            href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>

                </div>
                <div class="card-block">
                    <div class="table table-responsive">

                        {{ $dataTable->table() }}
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
@endpush
@push('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
