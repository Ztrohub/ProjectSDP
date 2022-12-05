@extends("pages.manajer.main_manajer")

@push('page_manajer_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Master Users
@endsection

@section('content_manajer')
    <!-- Modal -->
    <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Add a new user</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="inputFullname">Full Name</label>
                                <input type="text" id="inputFullname" name="fullname" class="form-control" placeholder="Enter full name" min="1">
                            </div>
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Enter username" min="1">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="text" id="inputPassword" name="password" class="form-control" placeholder="Enter password" min="1">
                            </div>
                            <div class="form-group">
                                <label for="inputDOB">Date of Birth</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="text" id="inputDOB" class="form-control" name="dob">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" id="inputAddress" class="form-control" name="address" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="inputMobileNumber">Mobile Number</label>
                                <input type="number" id="inputMobileNumber" class="form-control" name="mobile_number" placeholder="Enter mobile number">
                            </div>
                            <div class="form-group">
                                <label for="selectSex">Sex</label>
                                <select class="custom-select" id="selectSex" name="sex">
                                    <option value="L" selected>Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="selectPosition">Position</label>
                                <select class="custom-select" id="selectPosition" name="position">
                                    <option value="0">Owner</option>
                                    <option value="1">Manajer</option>
                                    <option value="2" selected>Teknisi</option>
                                    <option value="3">Kasir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputSalary">Salary</label>
                                <input type="number" id="inputSalary" name="salary" class="form-control" placeholder="Enter salary" min="1000">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-template">Add user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Users Table</h4>
                <button type="button" class="btn btn-template" data-toggle="modal" data-target="#modalAddUser">Add User</button>
            </div>
            <div class="card-body bg-that-more-light-than-black">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-3 text-center">Full Name</th>
                                <th class="col-2 text-center">Username</th>
                                <th class="col-1 text-center">Position</th>
                                <th class="col-2 text-center">Hire Date</th>
                                <th class="col-1 text-center">Mobile Number</th>
                                <th class="col-2 text-center">Salary</th>
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 2; $i++)
                                <tr>
                                    <td>Windah Basudara</td>
                                    <td>windahbasudara</td>
                                    <td>Teknisi</td>
                                    <td class="text-center">14 Nov 2022</td>
                                    <td>081294294157</td>
                                    <td>Rp 100.000.000</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('manajer_edit_user') }}"><button class="btn btn-template btn_edit_user">EDIT</button></a>
                                    </td>
                                </tr>
                            @endfor
                            @for ($i = 0; $i < 2; $i++)
                                <tr>
                                    <td>Garit Dewana</td>
                                    <td>garitdewana</td>
                                    <td>Manajer</td>
                                    <td class="text-center">14 Nov 2022</td>
                                    <td>081294294157</td>
                                    <td>Rp 100.000.000</td>
                                    <td>
                                        <a href="{{ route('manajer_edit_user') }}"><button class="btn btn-template btn_edit_user">EDIT</button></a>
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


