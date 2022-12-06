@extends("main")

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('src/master/users/table_user.css') }}">
@endpush

@section('name_page')
    Master Users
@endsection

@section('content')
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
                <form action="{{ url('users/insert')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputFullname">Full Name</label>
                            <input type="text" id="inputFullname" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter full name" min="1">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" id="inputUsername" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username" min="1">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" min="1">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDOB">Date of Birth</label>
                            <div class="input-group date" id="datepicker">
                                <input type="date" id="inputDOB" class="form-control @error('dob') is-invalid @enderror" name="dob">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            @error('dob')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" id="inputAddress" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter address">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputMobileNumber">Mobile Number</label>
                            <input type="number" id="inputMobileNumber" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Enter mobile number">
                            @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="selectSex">Sex</label>
                            <select class="custom-select @error('jk') is-invalid @enderror" id="selectSex" name="jk">
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="selectPosition">Position</label>
                            <select class="custom-select @error('role') is-invalid @enderror" id="selectPosition" name="role">
                                <option value="0">Owner</option>
                                <option value="1">Manajer</option>
                                <option value="2" selected>Teknisi</option>
                                <option value="3">Kasir</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
                                <th class="col-1 text-center">JK</th>
                                <th class="col-2 text-center">DOB</th>
                                <th class="col-1 text-center">Position</th>
                                <th class="col-2 text-center">Hire Date</th>
                                <th class="col-1 text-center">Phone Number</th>
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="text-center">
                                    <td class="fullnameColumn">{{ $user->user_name }}</td>
                                    <td>{{ $user->user_username }}</td>
                                    <td>{{ $user->user_jk }}</td>
                                    <td class="dobColumn">{{ date('d-m-Y', strtotime($user->user_dob)) }}</td>
                                    <td>{{ UserHelper::getRole($user->user_role) }}</td>
                                    <td class="hireDateColumn">{{ date('d M Y', strtotime($user->created_at))}}</td>
                                    <td>{{ $user->user_phone_number }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('master_edit_user') }}"><button class="btn btn-template btn_edit_user">EDIT</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection


