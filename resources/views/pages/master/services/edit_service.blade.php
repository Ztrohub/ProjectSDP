@extends("main")

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/master/items/edit_item.css') }}">
@endpush

@section('name_page')
    Master Service
@endsection

@section('content')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4 color-white-high-emphasis">Form to edit service</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputDescriptionService" style="color: #e2e0e1;">Description of Service</label>
                <input type="text" class="form-control bg-content border-1 ml-2 @error('description') is-invalid @enderror" id="inputDescriptionService" name="description" placeholder="Enter the description of service">
                @error('description')
                    <div class="invalid-feedback ml-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputServiceCost" style="color: #e2e0e1;">Service Cost</label>
                <input type="number" class="form-control bg-content border-1 ml-2 @error('cost') is-invalid @enderror" id="inputServiceCost" name="cost" placeholder="Enter the service cost">
                @error('cost')
                    <div class="invalid-feedback ml-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputPaymentStatus" style="color: #e2e0e1;">Service Payment Status</label>
                <select class="custom-select bg-content border-1 ml-2 @error('paymentStatus') is-invalid @enderror" name="qty_edit_position" id="inputPaymentStatus" name="paymentStatus">
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="0" selected>Unpaid</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="1">Paid</option>
                </select>
                @error('paymentStatus')
                    <div class="invalid-feedback ml-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputServiceStatus" style="color: #e2e0e1;">Service Status</label>
                <select class="custom-select bg-content border-1 ml-2 @error('serviceStatus') is-invalid @enderror" name="qty_edit_position" id="inputServiceStatus" name="serviceStatus">
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="0" selected>Undone</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="1">Done</option>
                </select>
                @error('serviceStatus')
                    <div class="invalid-feedback ml-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Update service</button>
            </div>
        </form>
    </div>
@endsection
