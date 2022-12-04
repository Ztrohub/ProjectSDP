@extends("pages.manajer.main_manajer")

@section('name_page')
    Master Item
@endsection

@push('page_manajer_custom_css')
    <link rel="stylesheet" href="{{ asset('src/teknisi/add_item/add_item.css') }}">
@endpush

@section('content_manajer')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4 color-white-high-emphasis">Form to edit item</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputNameItem" style="color: #e2e0e1;">Name of Item</label>
                <input type="text" class="form-control bg-content border-1 ml-2" id="inputNameItem" name="name" placeholder="Enter the item name">
            </div>
            <div class="form-group">
                <label for="inputBrandItem" style="color: #e2e0e1;">Item Brand</label>
                <input type="text" class="form-control bg-content border-1 ml-2" id="inputBrandItem" name="brand" placeholder="Enter the item brand">
            </div>
            <div class="form-group">
                <label for="inputStockItem" style="color: #e2e0e1;">Stock Item</label>
                <input type="number" class="form-control bg-content border-1 ml-2 mr-3" id="inputStockItem" name="stock" placeholder="Enter stock item">
            </div>
            <div class="form-group">
                <label for="inputItemPrice" style="color: #e2e0e1;">Item Price</label>
                <input type="number" class="form-control bg-content border-1 ml-2" id="inputItemPrice" name="price" placeholder="Enter the item price">
            </div>
            <div class="form-group">
                <label class="form-label" for="customFile" style="color: #e2e0e1;">Upload Image</label>
                <input type="file" class="form-control bg-that-more-light-than-black border-0 ml-2 w-25" name="img" id="customFile" />
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Update item</button>
            </div>
        </form>
    </div>
@endsection
