@extends('main')

@section('name_page')
    History
@endsection

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">History Service</h4>
                {{-- <a href="{{ route('master_item_add') }}"><button type="button" class="btn btn-template">Add Item</button></a> --}}
            </div>
            <div class="card-body bg-that-more-light-than-black">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">ID</th>
                                <th class="col-3 text-center">Description</th>
                                <th class="col-1 text-center">Service Cost</th>
                                <th class="col-2 text-center">Date</th>
                                <th class="col-1 text-center">Status</th>
                                <th class="col-1 text-center">Service Payment</th>
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td class="text-center">12</td>
                                    <td class="text-center">COKCOKCOK</td>
                                    <td class="text-center">Panasonic</td>
                                    <th class="text-center">14 Nov 2022 14:00:00</th>
                                    <td class="text-center text-bold text-danger">Undone</td>
                                    <td class="text-center text-bold text-info">Oke</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="#"><button type="button" class="btn btn-primary mr-md-2">Edit</button></a>
                                        <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
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

@push('page_custom_js')
    {{-- <!-- Page level plugins -->
    <script src="{{ asset('src/sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('src/sb-admin/js/demo/datatables-demo.js') }}"></script> --}}
@endpush
