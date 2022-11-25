@extends('pages.Manajer.main')

@push('page_custom_css')
<link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Master Service
@endsection

@section('content')



    <!-- Modal tambah service -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Service</label>
                            <input type="text" class="form-control" id="" placeholder="Masukin Nama Service...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="text" class="form-control" id="" placeholder="Masukin Harga Service...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Service</label>
                            <input type="text" class="form-control" id="" placeholder="Masukin Waktu Service...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">Done</option>
                                <option value="0">Undone</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Teknisi 1</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">nando memek</option>
                                <option value="2">lukas kontol</option>
                                <option value="3">jojo basah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Teknisi 2</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status Payment</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="0">Belum Lunas</option>
                                <option value="1">Lunas</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

 <!-- Modal edit service -->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Service</label>
                        <input type="text" class="form-control" id="" placeholder="Masukin Nama Service...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="text" class="form-control" id="" placeholder="Masukin Harga Service...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Service</label>
                        <input type="text" class="form-control" id="" placeholder="Masukin Waktu Service...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="custom-select">
                            <option selected> - </option>
                            <option value="1">Done</option>
                            <option value="0">Undone</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teknisi 1</label>
                        <select class="custom-select">
                            <option selected> - </option>
                            <option value="1">nando memek</option>
                            <option value="2">lukas kontol</option>
                            <option value="3">jojo basah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teknisi 2</label>
                        <select class="custom-select">
                            <option selected> - </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Payment</label>
                        <select class="custom-select">
                            <option selected> - </option>
                            <option value="0">Belum Lunas</option>
                            <option value="1">Lunas</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="card shadow mb-4 wrapper-datatables border-0">
        <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Master Service</h4>
            <div class="row bg-that-more-light-than-black">
                <div class="col-md-12 text-right">
                    <button class="btn btn-success badge-pill" data-toggle="modal" data-target="#add"
                        style="width: 80px;">ADD</button>
                </div>
            </div>
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
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
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
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
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
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection






