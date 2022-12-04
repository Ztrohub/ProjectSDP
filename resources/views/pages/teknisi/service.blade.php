@extends('main')

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('src/teknisi/service/table_service.css') }}">
@endpush

@section('name_page')
    Master Service
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Services Table</h4>
            </div>
            <div class="card-body bg-that-more-light-than-black">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">ID</th>
                                <th class="col-3 text-center descServiceColumn">Description of Service</th>
                                <th class="col-2 text-center customerNameColumn">Customer Name</th>
                                <th class="col-2 text-center serviceCostColumn">Service Cost</th>
                                <th class="col-2 text-center dateOfServiceColumn">Date of Service</th>
                                <th class="col-1 text-center">Payment Status</th>
                                <th class="col-1 text-center">Service Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>#123</td>
                                    <td>Ganti freon bocor dan kipas baru</td>
                                    <td>John Cena</td>
                                    <td>Rp 1.000.000</td>
                                    <td class="text-center">14 Nov 2022 14:00:00</td>
                                    <td class="text-center text-bold text-danger">UNPAID</td>
                                    <td class="text-left">
                                        <button class="btn btn-primary" style="width: 100%;">UNDONE</button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
