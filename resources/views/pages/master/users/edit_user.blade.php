@extends("main")

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/master/items/edit_item.css') }}">
@endpush

@section('name_page')
    Master User
@endsection

@section('content')
    <div class="container bg-that-more-light-than-black p-4" style="width: 90%;">
        <h3 class="mb-4 color-white-high-emphasis">Form to edit user data</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputFullname">Full Name</label>
                <input type="text" id="inputFullname" name="fullname" class="form-control bg-content border-1 ml-2" placeholder="Enter full name">
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" id="inputUsername" name="username" class="form-control bg-content border-1 ml-2" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="text" id="inputPassword" name="password" class="form-control bg-content border-1 ml-2" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="selectDOB">Date of Birth</label>
                <div class="input-group date" id="datepicker">
                    <input type="text" id="selectDOB" class="form-control bg-content border-1 ml-2" name="dob" placeholder="Select date of birth">
                    <span class="input-group-append">
                        <span class="input-group-text bg-content">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" id="inputAddress" class="form-control bg-content border-1 ml-2" name="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="inputMobileNumber">Mobile Number</label>
                <input type="number" id="inputMobileNumber" class="form-control bg-content border-1 ml-2" name="mobile_number" placeholder="Enter mobile number">
            </div>
            <div class="form-group">
                <label for="selectSex">Sex</label>
                <select id="selectSex" class="custom-select bg-content border-1 ml-2" name="sex">
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="L" selected>Laki-laki</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for= "selectPosition">Position</label>
                <select id="selectPosition" class="custom-select bg-content border-1 ml-2" name="position">
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="0">Owner</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="1">Manajer</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="2" selected>Teknisi</option>
                    <option class="bg-white-high-emphasis color-white-low-emphasis" value="3">Kasir</option>
                </select>
            </div>

            <div class="d-md-flex justify-content-between">
                <button type="submit" class="btn btn-danger mt-3 col-12 col-md-3">Fired</button>
                <button type="submit" class="btn btn-template mt-3 col-12 col-md-3">Update user</button>
            </div>
        </form>
    </div>
@endsection
