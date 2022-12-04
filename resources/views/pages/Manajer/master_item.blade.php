@extends("pages.manajer.main_manajer")

@push('page_manajer_custom_css')
    <link href="{{ asset('src/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('src/datatables/datatables.css') }}">
@endpush

@section('name_page')
    Master Item
@endsection

@section('content_manajer')
    <!-- Modal -->
    <div class="modal fade" id="modalAddItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Add a new item</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="inputNameItem">Name of Item</label>
                                <input type="text" class="form-control" id="inputNameItem" name="name" placeholder="Enter the item name">
                            </div>
                            <div class="form-group">
                                <label for="inputBrandItem">Item Brand</label>
                                <input type="text" class="form-control" id="inputBrandItem" name="brand" placeholder="Enter the item brand">
                            </div>
                            <div class="form-group">
                                <label for="inputStockItem">Stock Item</label>
                                <input type="number" class="form-control" id="inputStockItem" name="stock" placeholder="Enter stock item">
                            </div>
                            <div class="form-group">
                                <label for="inputItemPrice">Item Price</label>
                                <input type="number" class="form-control" id="inputItemPrice" name="price" placeholder="Enter the item price">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="customFile">Upload Image</label>
                                <input type="file" class="form-control border-0 w-25" id="customFile" name="img"/>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-template">Add item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4 wrapper-datatables border-0">
            <div class="card-header py-3 border-0 bg-that-more-light-than-black d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold mt-auto mb-auto mr-3">Items Table</h4>
                <button type="button" class="btn btn-template" data-toggle="modal" data-target="#modalAddItem">Add Item</button>
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
                                        <a href="{{ route('manajer_edit_item') }}"><button type="button" class="btn btn-template mr-md-2">EDIT</button></a>
                                        <a href="#"><button type="button" class="btn btn-danger">DELETE</button></a>
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
