@extends('main')

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('src/teknisi/item/table_item.css') }}">
@endpush

@section('name_page')
    Master Item
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Items Table</h4>
                <a href="{{ route('master_item_add') }}"><button type="button" class="btn btn-template">Add Item</button></a>
            </div>
            <div class="card-body bg-that-more-light-than-black">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">ID</th>
                                <th class="col-4 text-center">Name of Item</th>
                                <th class="col-2 text-center">Brand</th>
                                <th class="col-1 text-center">Stock</th>
                                <th class="col-2 text-center">Price</th>
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>#123</td>
                                    <td class="nameColumn">Toshiba 3000</td>
                                    <td>Panasonic</td>
                                    <th class="text-right">69</th>
                                    <td class="priceColumn">Rp. 30.000.000</td>
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
