@extends('main')

@push('page_custom_css')
<link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Service
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4 wrapper-datatables border-0">
        <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Master Service</h4>
        </div>
        <div class="card-body bg-that-more-light-than-black">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1 text-center">ID</th>
                            <th scope="col" class="col-1 text-center">Nama Service</th>
                            <th scope="col" class="col-1 text-center">Harga</th>
                            <th scope="col" class="col-1 text-center">Date</th>
                            <th scope="col" class="col-1 text-center">Status</th>
                            <th scope="col" class="col-1 text-center">Teknisi</th>
                            <th scope="col" class="col-1 text-center">Status Payment</th>
                            <th scope="text-center" style="padding-left: 4vw;" class="col-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-center">kontol lukas</td>
                            <td class="text-center">Rp 10.000</td>
                            <td class="text-center">14 Nov 2022 14:00:00</td>
                            <td class="text-center text-bold text-danger">Undone</td>
                            <td class="text-center text-bold">Jancok</td>
                            <td class="text-center text-bold text-info">Oke</td>
                            <td class="text-left">
                                <button class="btn btn-success" style="width: 100%;">SELESAI</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-center">kontol lukas</td>
                            <td class="text-center">Rp 10.000</td>
                            <td class="text-center">14 Nov 2022 14:00:00</td>
                            <td class="text-center text-bold text-danger">Undone</td>
                            <td class="text-center text-bold">Jancok</td>
                            <td class="text-center text-bold text-info">Oke</td>
                            <td class="text-left">
                                <button class="btn btn-success" style="width: 100%;">SELESAI</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-center">kontol lukas</td>
                            <td class="text-center">Rp 10.000</td>
                            <td class="text-center">14 Nov 2022 14:00:00</td>
                            <td class="text-center text-bold text-danger">Undone</td>
                            <td class="text-center text-bold">Jancok</td>
                            <td class="text-center text-bold text-info">Oke</td>
                            <td class="text-left">
                                <button class="btn btn-success" style="width: 100%;">SELESAI</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
