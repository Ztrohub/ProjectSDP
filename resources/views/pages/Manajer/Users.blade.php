@extends("pages.Manajer.main")

@section('name_page')
    Master Users
@endsection

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush



@section('content')

    <!-- Modal tambah user -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name User</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Name...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Username...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Input Your Password...">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Address...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sex</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">Man</option>
                                <option value="0">Women</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">Done</option>
                                <option value="0">Undone</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="0">owner</option>
                                <option value="1">manager</option>
                                <option value="2">teknisi</option>
                                <option value="3">kasir</option>
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

    <!-- Modal tambah user -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name User</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Name...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Username...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Input Your Password...">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" id="" placeholder="Input Your Address...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sex</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">Man</option>
                                <option value="0">Women</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="1">Done</option>
                                <option value="0">Undone</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <select class="custom-select">
                                <option selected> - </option>
                                <option value="0">owner</option>
                                <option value="1">manager</option>
                                <option value="2">teknisi</option>
                                <option value="3">kasir</option>
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

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List User</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4  bg-that-more-light-than-black">
        <div class="card-header py-3  bg-that-more-light-than-black">
            <h4 class="m-0 font-weight-bold text-white">List User</h4>
            <div class="row bg-that-more-light-than-black mt-n4">
                <div class="col-md-12 text-right">
                    <button class="btn btn-success badge-pill" data-toggle="modal" data-target="#add"
                        style="width: 80px;">ADD</button>
                </div>
            </div>
        </div>
        <div class="card-body text-white">
            <div class="table-responsive">
                <table class="table table-bordered  bg-that-more-light-than-black" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-white">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>Jenis Kelamin</th>
                            <th>Start date</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold text-white">Tiger Nixon</td>
                            <td class="font-weight-bold text-white">System Architect</td>
                            <td class="font-weight-bold text-white">Edinburgh</td>
                            <td class="font-weight-bold text-white">61</td>
                            <td class="font-weight-bold text-white">2011/04/25</td>
                            <td class="font-weight-bold text-white">$320,800</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
                                <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#edit" style="width: 80px;">EDIT</button>
                                <button class="btn btn-danger badge-pill" style="width: 95px;">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-white">Garrett Winters</td>
                            <td class="font-weight-bold text-white">Accountant</td>
                            <td class="font-weight-bold text-white">Tokyo</td>
                            <td class="font-weight-bold text-white">63</td>
                            <td class="font-weight-bold text-white">2011/07/25</td>
                            <td class="font-weight-bold text-white">$170,750</td>
                            <td class="text-center">
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


