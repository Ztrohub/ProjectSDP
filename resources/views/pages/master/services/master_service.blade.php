@extends("main")

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Master Service
@endsection

@section('content')
    <!-- Modal tambah service -->
    <div class="modal fade" id="modalAddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="inputServiceDescription">Service Description</label>
                            <input type="text" class="form-control" id="inputServiceDescription" name="description" placeholder="Enter the service name">
                        </div>
                        <div class="form-group">
                            <label for="inputDateService">Date of Service</label>
                            <input type="text" class="form-control" id="inputDateService" name="dateOfService" placeholder="Enter the service date">
                        </div>
                        <div class="form-group">
                            <label for="inputNameFirstTechnician">Name of First Technician</label>
                            <select class="custom-select" id="inputNameFirstTechnician" name="nameFirstTechnician">
                                <option value="1" selected>nando</option>
                                <option value="2">lukas</option>
                                <option value="3">jojo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNameSecondTechnician">Name of Second Technician</label>
                            <select class="custom-select" id="inputNameSecondTechnician" name="nameSecondTechnician">
                                <option value="1" selected>lukas</option>
                                <option value="2">jojo</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-template">Add new service</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Services Table</h4>
                <button type="button" class="btn btn-template" data-toggle="modal" data-target="#modalAddService">Add Service</button>
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
                                    <td class="text-center text-bold text-danger"">UNPAID</td>
                                    <td class="text-left">
                                        <a href="{{ route('master_edit_service') }}"><button class="btn btn-template">EDIT</button></a>
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






