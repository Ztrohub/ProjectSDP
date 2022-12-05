@extends('main')

@push('page_custom_css')
    <link rel="stylesheet" href="{{ asset('src/kasir/store/css/store.css') }}">
@endpush

@section('name_page')
    Store
@endsection

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>How many would you like to buy?</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="exampleInputEmail1">Amount</label>
                                <i style="font-size: .9rem; paddding-top: 5px;">Rp <span id="showPriceEach">0</span>,- / each</i>
                            </div>
                            <input type="number" id="qty_input" class="form-control" placeholder="Number of items you wish to purchase.." min="1">
                        </div>
                    </form>
                    <div class="d-flex">
                        <div class="col-7"></div>
                        <div class="col text-right"><b>Subtotal :</b> Rp <span id="showSubotal">0</span>,-</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-template">Add to cart</button>
                </div>
            </div>
        </div>
    </div>

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
                <div class="wrapper-card mb-4" data-price=5000 data-toggle="modal" data-target="#modalAddToCart">
                    <div class="card">
                        <img src="{{ asset('src/teknisi/store/img/ac.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="brand-text color-white-medium-emphasis">BRAND</p>
                            <h5 class="card-title">Product name</h5>
                            <div class="wrapper-bottom mt-2">
                                <p class="card-price">Rp. 5.000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

@push('page_custom_js')
    <script>
        $(function() {
            $(document).on("click", ".wrapper-card", function () {
                var itemPrice = $(this).data('price');
                $("#showPriceEach").html( itemPrice );
                $("#showSubotal").html( itemPrice );
                $("#qty_input").val( 1 );
            });

            $("#qty_input").keyup(function(){
                if($(this).val() != ""){
                    $("#showSubotal").html( $(this).val() * $("#showPriceEach").html() );
                } else {
                    $("#showSubotal").html( 0 );
                }
            });
        });
    </script>
@endpush
