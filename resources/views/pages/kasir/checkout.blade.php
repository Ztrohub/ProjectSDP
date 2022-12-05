<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AsiaTeknik</title>
    <link rel="icon" href="{{ asset('src/sb-admin/img/logo_aja.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('src/kasir/checkout/checkout.css') }}">
</head>
<body>
    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Payment</h2>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <div class="wrap-item">
                            <div class="item">
                                <span class="price">$200</span>
                                <p class="item-name">Product 1</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="item">
                                <span class="price">$120</span>
                                <p class="item-name">Product 2</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="item">
                                <span class="price">$120</span>
                                <p class="item-name">Product 2</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="item">
                                <span class="price">$120</span>
                                <p class="item-name">Product 2</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="item">
                                <span class="price">$120</span>
                                <p class="item-name">Product 2</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="item">
                                <span class="price">$120</span>
                                <p class="item-name">Product 2</p>
                                <p class="item-description">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="total">Total<span class="price">$320</span></div>
                    </div>
                    <div class="card-details pt-0">
                        <div class="row pt-0 mt-0">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-block btnProceed">Proceed</button>
                            </div>
                            <div class="form-group col-sm-12">
                                <a href="{{ route('kasir_cart') }}" style="text-decoration: none;">
                                    <button type="button" class="btn btn-secondary btn-block">Back to cart</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
