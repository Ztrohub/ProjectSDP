@extends("main")

@push('page_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('src/master/services/table_service.css') }}">
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
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="inputServiceDescription" name="description" placeholder="Enter the service name">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDateService">Date of Service</label>
                            <input type="text" class="form-control @error('dateOfService') is-invalid @enderror" id="inputDateService" name="dateOfService" placeholder="Enter the service date">
                            @error('dateOfService')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputNameFirstTechnician">Name of First Technician</label>
                            <select class="custom-select @error('nameFirstTechnician') is-invalid @enderror" id="inputNameFirstTechnician" name="nameFirstTechnician">
                                <option value="1" selected>nando</option>
                                <option value="2">lukas</option>
                                <option value="3">jojo</option>
                            </select>
                            @error('nameFirstTechnician')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputNameSecondTechnician">Name of Second Technician</label>
                            <select class="custom-select @error('nameSecondTechnician') is-invalid @enderror" id="inputNameSecondTechnician" name="nameSecondTechnician">
                                <option value="1" selected>lukas</option>
                                <option value="2">jojo</option>
                            </select>
                            @error('nameSecondTechnician')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
                                <th class="col-1 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <td>#{{ $service->service_id}}</td>
                                        <td class="descriptionColumn">{{ $service->service_description}}</td>
                                        <td class="nameCustomerColumn">{{ $service->Customers->customer_name}}</td>
                                        <td class="costColumn">Rp {{ number_format($service->service_cost, 2, ',','.')}}</td>
                                        <td class="text-center dateServiceColumn">{{ date('d M Y h:m:s', strtotime($service->service_date))}}</td>
                                        <td class="text-center text-bold text-danger">
                                            @if ($service->service_payment_status == 1)
                                                <a href="#"><button type="button" class="btn btn-success">PAID</button></a>
                                            @else
                                                <a href="#"><button type="button" class="btn btn-danger">UNPAID</button></a>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('master_edit_service') }}"><button class="btn btn-template">EDIT</button></a>
                                            <a style="width: 100%" class="ml-2" href="{{ route('master_edit_service') }}"><button class="btn btn-danger" style="width: 100%">UNDONE</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center text-danger font-weight-bold py-4" colspan="7">NO SERVICE</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_custom_js')
    @if (count($errors) > 0)
        <script type="text/javascript">
                $('#modalAddService').modal('show');
        </script>
    @endif
@endpush
