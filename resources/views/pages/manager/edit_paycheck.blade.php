@extends("pages.manager.main_manager")

@push('page_manager_custom_css')
    <link rel="stylesheet" href="{{ asset('src/teknisi/add_item/add_item.css') }}">
@endpush

@section('name_page')
    Paycheck
@endsection

@section('content_manager')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4 color-white-high-emphasis">Form to edit paycheck</h3>
        <form action="#" method="POST">
            @csrf

            <span class="color-white-high-emphasis"><b style="margin-right: 100px;">Name</b> Windah Basudara</span> <br>
            <span class="color-white-high-emphasis"><b style="margin-right: 68px;">Username</b> windahbasudara</span> <br>
            <span class="color-white-high-emphasis"><b style="margin-right: 83px;">Address</b> Jl. in aja dulu no. 69</span> <br>
            <span class="color-white-high-emphasis"><b style="margin-right: 34px;">Phone Number</b> 29839293898</span> <br>
            <span class="color-white-high-emphasis"><b style="margin-right: 86px;">Position</b> Teknisi</span> <br><br>

            <div class="form-group">
                <label for="inputItemPrice" style="color: #e2e0e1;">Paycheck</label>
                <input type="number" class="form-control bg-content border-1 ml-2" id="inputItemPrice" name="price" placeholder="Enter the paycheck">
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Update paycheck</button>
            </div>
        </form>
    </div>
@endsection
