@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/add_item/add_item.css') }}">
@endpush

@section('content')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4">Add New Item Form</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputNameItem" style="color: #e2e0e1;">Name</label>
                <input type="text" class="form-control bg-content border-0" id="inputNameItem" placeholder="Input the name of your item">
            </div>
            <div class="form-group">
                <label for="inputBrandItem" style="color: #e2e0e1;">Brand</label>
                <select class="custom-select bg-content border-0" id="inputGroupSelect01">
                    <option value="" disabled selected>== Select Brand ==</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputStockItem" style="color: #e2e0e1;">Stock</label>
                <input type="number" class="form-control bg-content border-0" id="inputStockItem" placeholder="Input stock of the item">
            </div>
            <div class="form-group">
                <label for="inputItemPrice" style="color: #e2e0e1;">Price</label>
                <input type="number" class="form-control bg-content border-0" id="inputItemPrice" placeholder="Input price of the item">
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
