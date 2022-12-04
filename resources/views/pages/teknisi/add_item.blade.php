@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/teknisi/add_item/add_item.css') }}">
@endpush

@section('name_page')
    Master Item
@endsection

@section('content')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4">Form to add new items</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputNameItem" style="color: #e2e0e1;">Name of Item</label>
                <input type="text" class="form-control bg-content border-0 ml-2" id="inputNameItem" placeholder="Enter the item name">
            </div>
            <div class="form-group">
                <label for="inputBrandItem" style="color: #e2e0e1;">Item Brand</label>
                <input type="text" class="form-control bg-content border-0 ml-2" id="inputBrandItem" placeholder="Enter the item brand">
            </div>
            <div class="form-group">
                <label for="inputStockItem" style="color: #e2e0e1;">Stock Item</label>
                <input type="number" class="form-control bg-content border-0 ml-2 mr-3" id="inputStockItem" placeholder="Enter stock item">
            </div>
            <div class="form-group">
                <label for="inputItemPrice" style="color: #e2e0e1;">Item Price</label>
                <input type="number" class="form-control bg-content border-0 ml-2" id="inputItemPrice" placeholder="Enter the item price">
            </div>
            <div class="form-group">
                <label class="form-label" for="customFile" style="color: #e2e0e1;">Upload Image</label>
                <input type="file" class="form-control bg-that-more-light-than-black border-0 ml-2" id="customFile" />
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Add item</button>
            </div>
        </form>
    </div>
@endsection
