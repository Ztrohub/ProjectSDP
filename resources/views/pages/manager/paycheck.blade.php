@extends("pages.manager.main_manager")

@push('page_manager_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Paycheck
@endsection

@section('content_manager')
    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-body bg-that-more-light-than-black">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-5 text-center">Full Name</th>
                                <th class="col-3 text-center">Username</th>
                                <th class="col-1 text-center">Position</th>
                                <th class="col-2 text-center">Salary</th>
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>Windah Basudara</td>
                                    <td>windahbasudara</td>
                                    <td>Teknisi</td>
                                    <td>Rp 1.000.000</td>
                                    <td>
                                        <a href="{{ route('manager_edit_paycheck') }}"><button class="btn btn-template">EDIT</button></a>
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
