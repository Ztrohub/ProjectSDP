@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/kasir/cart/cart.css') }}">
@endpush

@section('name_page')
    Cart
@endsection

@section('content')
    <div class="wrap cf">
        <div class="heading cf">
            <h1>My Cart</h1>
            <a href="{{ route('kasir_store') }}" class="continue">Continue Shopping</a>
        </div>
        <div class="cart">
            <ul class="cartWrap">

                @foreach ($items as $item)
                    <li class="items">
                        <div class="infoWrap">
                            <div class="cartSection">
                                <img src="{{ asset('src/card-product/img/ac.png') }}" alt="" class="itemImg" />
                                <p class="itemNumber">{{ $item->item_brand }}</p>
                                <h3 class="color-white-high-emphasis">{{ $item->item_name}}</h3>

                                <form class="change_amount" action="{{ route('kasir_change_cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->item_id}}">
                                    <p> <input type="number" name="item_qty" class="qty" value="{{ $item->pivot->item_qty }}"/> x Rp. {{number_format($item->item_price, 2, ',','.')}}</p>
                                </form>
                            </div>

                            <div class="prodTotal cartSection">
                                <p>Rp. {{number_format($item->item_price * $item->pivot->item_qty, 2, ',','.')}}</p>
                            </div>

                            <div class="cartSection removeWrap">
                                <a href="{{ route('kasir_remove_cart', ['item_id' => $item->item_id]) }}" class="remove">x</a>
                            </div>
                        </div>
                    </li>
                @endforeach
                <!--<li class="items even">Item 2</li>-->
            </ul>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow mr-3"><span class="label">Item Type Count: </span><span class="value">{{ count($items)}}</span></li>
                <li class="totalRow mr-3 final"><span class="label">Total Price</span><span class="value">Rp {{number_format($total, 2, ',','.')}}</span></li>
                <li class="totalRow mt-2"><a href="{{ route('kasir_checkout') }}" class="btn continue">Checkout</a></li>
            </ul>
        </div>
    </div>
@endsection

@push('page_custom_js')
    <script>
        var input = document.querySelector('.qty');

        input.addEventListener('keydown',
            function(e) {
                if (e.keyCode == 13) {
                    var form = document.querySelector('.change_amount');
                    form.submit();
                }
            }
        );
    </script>
@endpush
