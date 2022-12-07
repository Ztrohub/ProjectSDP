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
    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Users Table</h4>
                <a href="{{ route('master_add_user') }}" type="button" class="btn btn-template" >Add User</a>
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
                                <th class="col-1 text-center">Status</th>
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
                                    <td>{{ $user->user_status }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ url('owner/users/edit/'.$user->user_id) }}"><button class="btn btn-template btn_edit_user">EDIT</button></a>
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


