@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/teknisi/cart/cart.css') }}">
@endpush

@section('name_page')
    Cart
@endsection

@section('content')
    <div class="wrap cf">
        <div class="heading cf">
            <h1>My Cart</h1>
            <a href="{{ route('store') }}" class="continue">Continue Shopping</a>
        </div>
        <div class="cart">
            <ul class="cartWrap">

                @for ($i = 0; $i < 4; $i++)
                    <li class="items">
                        <div class="infoWrap">
                            <div class="cartSection">
                                <img src="{{ asset('src/card-product/img/ac.png') }}" alt="" class="itemImg" />
                                <p class="itemNumber">#QUE-007544-002</p>
                                <h3 class="color-white-high-emphasis">Item Name 1</h3>

                                <p> <input type="number"  class="qty" value="3"/> x Rp. 2.000.000</p>
                            </div>

                            <div class="prodTotal cartSection">
                                <p>Rp. 6.000.000</p>
                            </div>

                            <div class="cartSection removeWrap">
                                <a href="#" class="remove">x</a>
                            </div>
                        </div>
                    </li>
                @endfor
                <!--<li class="items even">Item 2</li>-->
            </ul>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow mr-3"><span class="label">Subtotal</span><span class="value">$35.00</span></li>
                <li class="totalRow mr-3"><span class="label">Shipping</span><span class="value">$5.00</span></li>
                <li class="totalRow mr-3"><span class="label">Tax</span><span class="value">$4.00</span></li>
                <li class="totalRow mr-3 final"><span class="label">Total</span><span class="value">$44.00</span></li>
                <li class="totalRow mt-2"><a href="{{ route('checkout') }}" class="btn continue">Checkout</a></li>
            </ul>
        </div>
    </div>
@endsection

@push('page_custom_js')
    <script src="{{ asset('src/cart/cart.js') }}"></script>
@endpush
