<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('libs/bootstrap-5.3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-home ">
    <div class="container ">
        <div class="row justify-content-center align-items-center ">
            <div class="col-lg-6 col-12 bg-white shadow-lg rounded-2">
                <div class="row py-5 px-2">
                    <div class="col-12">
                        <h1 class="text-center mb-3">Product</h1>
                        <div id="products" class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-12 py-3">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <h5 class="card-title">Produk</h5>
                                        <p class="card-title">Rp. 0</p>
                                        <a href="#" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 py-3">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <h5 class="card-title">Produk</h5>
                                        <p class="card-title">Rp. 0</p>
                                        <a href="#" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 py-3">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <h5 class="card-title">Produk</h5>
                                        <p class="card-title">Rp. 0</p>
                                        <a href="#" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 py-3">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <h5 class="card-title">Produk</h5>
                                        <p class="card-title">Rp. 0</p>
                                        <a href="#" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 py-3">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <input type="hidden" id="id" value="1">
                                        <h5 class="card-title" id="nameProducts">Produk</h5>
                                        <p class="card-title">Rp. <span id="valPrice" data-price="50000">50000</span>
                                        </p>
                                        <button class="btn btn-primary" id="btnBuy">Beli Yuk</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 py-4">
                                <div class="card">
                                    <img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body mx-auto">
                                        <input type="hidden" id="id" value="2">
                                        <h5 class="card-title" id="nameProducts">Produk 2</h5>
                                        <p class="card-title">Rp. <span id="valPrice" data-price="10000">10000</span>
                                        </p>
                                        <button class="btn btn-primary" id="btnBuy">Beli Yuk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">checkout</h1>
                        <div class="container py-5 px-1">
                            <div id="checkout" class="row justify-content-between align-items-center mb-4">
                                <div class="row">
                                    <div class="col-4 text-start">
                                        <h5>Nama Produk</h5>
                                    </div>
                                    <div class="col-4 text-end">
                                        <h5>Quantity</h5>
                                    </div>
                                    <div class="col-4 text-end">
                                        <h5>Harga</h5>
                                    </div>
                                </div>
                                <div id="childCheckout">
                                    {{-- <div class="row">
                                        <div class="col-6 text-start">
                                            <p>produk 1</p>
                                        </div>
                                        <div class="col-2 text-end">
                                            <input id="qty" type="number" class="form-control col-2 text-end">
                                        </div>
                                        <div class="col-4 text-end">
                                            <p id="price" data-price="50000">5</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-8 text-end  ">
                                    <h4>total</h4>
                                </div>
                                <div class="col-4 text-end">
                                    Rp. <span id="sumPrice">0</span>
                                </div>
                            </div>
                            <button class="btn btn-primary float-end mb-5">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('libs/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script>
        // $(document).ready(function() {

        $('#btnBuy').click(function() {
            var nameProduct = $('#nameProducts').text();
            var priceProduct = $('#valPrice').data('price');
            $('#childCheckout').append(`<div class="row">
                                    <div class="col-6 text-start">
                                        <p>${nameProduct}</p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <input id="qty" type="number" class="form-control col-2 text-end" value="1">
                                    </div>
                                    <div class="col-4 text-end">
                                        <p id="price" data-price="${priceProduct}">${priceProduct}</p>
                                    </div>
                                </div>`);
            $('#qty').change(function() {
                var qty = $('#qty').val();
                var price = $('#price').data('price');
                console.log(price);

                sumPrice = price * qty;
                $('#price').text(sumPrice);
                $('#sumPrice').text(sumPrice);
            });
        });
        // });  
    </script>
</body>

</html>
