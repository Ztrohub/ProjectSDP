@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/store/css/store.css') }}">
@endpush

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
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-card mb-4">
                <div class="card">
                    <img src="{{ asset('src/store/img/ac.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="brand-text">BRAND</p>
                        <h5 class="card-title">Product name</h5>
                        <div class="wrapper-bottom mt-2">
                            <p class="card-price">$149</p>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
