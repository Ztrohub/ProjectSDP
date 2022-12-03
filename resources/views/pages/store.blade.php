@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/store/css/store.css') }}">
@endpush

@section('name_page')
    Store
@endsection

@section('content')
    <div class="super-container">
        <div class="main-search-input-wrap">
            <div class="main-search-input fl-wrap">
                <div class="main-search-input-item">
                    <input type="text"  value="" placeholder="Search Products...">
                </div>

                <button class="main-search-button">Search</button>
            </div>
        </div>

        <div class="container-store mx-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="wrapper-card mb-4">
                    <a href="#">
                        <div class="card">
                            <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="brand-text color-white-medium-emphasis">BRAND</p>
                                <h5 class="card-title">Product name</h5>
                                <div class="wrapper-bottom mt-2">
                                    <p class="card-price">$149</p>
                                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
