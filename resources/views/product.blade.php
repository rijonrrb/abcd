<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            padding: 30px;
            max-width: 1200px;
            margin: auto;
        }

        .h3 {
            font-weight: 900;
        }

        .views {
            font-size: 0.85rem;
        }



        .green-label {
            background-color: #defadb;
            color: #48b83e;
            border-radius: 5px;
            font-size: 0.8rem;
            margin: 0 3px;
        }

        .radio,
        .checkbox {
            padding: 6px 10px;
        }

        .border {
            border-radius: 12px;
        }

        .options {
            position: relative;
            padding-left: 25px;
        }

        .radio label,
        .checkbox label {
            display: block;
            font-size: 14px;
            cursor: pointer;
            margin: 0;
        }

        .options input {
            opacity: 0;
        }

        .checkmark {
            position: absolute;
            top: 0px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 50%;
        }

        .options input:checked~.checkmark:after {
            display: block;
        }

        .options .checkmark:after {
            content: "";
            width: 9px;
            height: 9px;
            display: block;
            background: white;
            position: absolute;
            top: 52%;
            left: 51%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s;
        }

        .options input[type="radio"]:checked~.checkmark {
            background: #61b15a;
            transition: 300ms ease-in-out 0s;
        }

        .options input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1);
        }

        .count {
            font-size: 0.8rem;
        }

        label {
            cursor: pointer;
        }

        .tick {
            display: block;
            position: relative;
            padding-left: 23px;
            cursor: pointer;
            font-size: 0.8rem;
            margin: 0;
        }

        .tick input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .check {
            position: absolute;
            top: 1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .tick:hover input~.check {
            background-color: #f3f3f3;
        }

        .tick input:checked~.check {
            background-color: #61b15a;
        }

        .check:after {
            content: "";
            position: absolute;
            display: none;
        }

        .tick input:checked~.check:after {
            display: block;
            transform: rotate(45deg) scale(1);
        }

        .tick .check:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg) scale(2);
        }

        #country {
            font-size: 0.8rem;
            border: none;
            border-left: 1px solid #ccc;
            padding: 0px 10px;
            outline: none;
            font-weight: 900;
        }

        .close {
            font-size: 1.2rem;
        }

        div.text-muted {
            font-size: 0.85rem;
        }

        #sidebar {
            width: 25%;
            float: left;
        }

        .category {
            font-size: 0.9rem;
            cursor: pointer;
        }

        .list-group-item {
            border: none;
            padding: 0.3rem 0.4rem 0.3rem 0rem;
        }

        .badge-primary {
            background-color: #defadb;
            color: #48b83e
        }

        .brand .check {
            background-color: #fff;
            top: 3px;
            border: 1px solid #666;
        }

        .brand .tick {
            font-size: 1rem;
            padding-left: 25px;
        }

        .rating .check {
            background-color: #fff;
            border: 1px solid #666;
            top: 0;
        }

        .rating .tick {
            font-size: 0.9rem;
            padding-left: 25px;
        }

        .rating .fas.fa-star {
            color: #ffbb00;
            padding: 0px 3px;
        }

        .brand .tick:hover input~.check,
        .rating .tick:hover input~.check {
            background-color: #f9f9f9;
        }

        .brand .tick input:checked~.check,
        .rating .tick input:checked~.check {
            background-color: #61b15a;
        }

        #products {
            width: 75%;
            padding-left: 30px;
            margin: 0;
            float: right;
        }

        .card:hover {
            transform: scale(1.05);
            transition: all 0.5s ease-in-out;
            cursor: pointer;
        }

        .card-body {
            padding: 0.5rem;
        }

        .card-body .description {
            font-size: 0.78rem;
            padding-bottom: 8px;
        }

        div.h6,
        h6 {
            margin: 0;
        }

        .product .fa-star {
            font-size: 0.9rem;
        }

        .rebate {
            font-size: 0.9rem;
        }


        img {
            width: 192px;
            height: 132px;
            object-fit: contain;
        }

        .clear {
            clear: both;
        }

        .btn.btn-success {
            visibility: hidden;
        }

        @media(min-width:992px) {

            .filter,
            #mobile-filter {
                display: none;
            }
        }

        @media(min-width:768px) and (max-width:991px) {

            .radio,
            .checkbox {
                padding: 6px 10px;
                width: 49%;
                float: left;
                margin: 5px 5px 5px 0px;
            }

            .filter,
            #mobile-filter {
                display: none;
            }
        }

        @media(min-width:576px) and (max-width:767px) {
            #sidebar {
                width: 35%;
            }

            #products {
                width: 65%;
            }

            .filter,
            #mobile-filter {
                display: none;
            }

            .h3+.ml-auto {
                margin: 0;
            }
        }

        @media(max-width:575px) {
            .wrapper {
                padding: 10px;
            }

            .h3 {
                font-size: 1.3rem;
            }

            #sidebar {
                display: none;
            }

            #products {
                width: 100%;
                float: none;
            }

            #products {
                padding: 0;
            }

            .clear {
                float: left;
                width: 80%;
            }

            .btn.btn-success {
                visibility: visible;
                margin: 10px 0px;
                color: #fff;
                padding: 0.2rem 0.1rem;
                width: 20%;
            }

            .green-label {
                width: 50%;
            }

            .btn.text-success {
                padding: 0;
            }

            .content,
            #mobile-filter {
                clear: both;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mb-2" href="{{ route('addproduct') }}">Add Product</a>
    </nav>
    <div class="wrapper">
        <div class="d-md-flex align-items-md-center">
            <div class="h3">Fruits and vegetables</div>
            <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span
                        class="fas fa-th px-md-2 px-1"></span><span>Grid view</span> </span> <span class="btn"> <span
                        class="fas fa-list-ul"></span><span class="px-md-2 px-1">List view</span> </span> <span
                    class="green-label px-md-2 px-1">428</span> <span class="text-muted">Products</span> </div>
        </div>
        <div class="d-lg-flex align-items-lg-center pt-2">
            <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> <label
                    class="options">Most Popular <input type="radio" name="radio"> <span class="checkmark"></span>
                </label> <label class="options">Cheapest <input type="radio" name="radio" checked> <span
                        class="checkmark"></span> </label> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Farm <input type="checkbox" checked="checked"> <span class="check"></span> </label>
                <span class="text-success px-2 count"> 328</span>
            </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Bio <input type="checkbox"> <span class="check"></span> </label> <span
                    class="text-success px-2 count"> 72</span> </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label
                    class="tick">Czech republic <input type="checkbox"> <span class="check"></span> </label> <span
                    class="border px-1 mx-2 mr-3 font-weight-bold count"> 12</span> <select name="country"
                    id="country" class="bg-light">
                    <option value="" hidden>Country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Uk">UK</option>
                </select> </div>
        </div>
        <div class="d-sm-flex align-items-sm-center pt-2 clear">
            <div class="text-muted filter-label">Applied Filters:</div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0 my-sm-0 my-2">Selected Filtre <span
                    class=" px-1 close">&times;</span> </div>
            <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0">Selected Filtre <span
                    class=" px-1 close">&times;</span> </div>
        </div>
        <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse"
                data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span
                    class="px-1 fas fa-filter"></span></button> </div>
        <div id="mobile-filter">
            <div class="py-3">
                <h5 class="font-weight-bold">Categories</h5>
                <ul class="list-group">
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        vegetables <span class="badge badge-primary badge-pill">328</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Fruits <span class="badge badge-primary badge-pill">112</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Kitchen Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                    <li
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                        Chefs Tips <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Brands</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input
                                type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input
                                type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm
                            <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve
                            <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve
                            <input type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Rating</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span>
                        </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <span
                                class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                class="check"></span> </label> </div>
                </form>
            </div>
        </div>
        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            vegetables <span class="badge badge-primary badge-pill">328</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Fruits <span class="badge badge-primary badge-pill">112</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Kitchen Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                        <li
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">
                            Chefs Tips <span class="badge badge-primary badge-pill">48</span> </li>
                    </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Brands</h5>
                    <form class="brand">
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields
                                <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields
                                <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma
                                Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field
                                Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar
                                Steve <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Rating</h5>
                    <form class="rating">
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span>
                            </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span>
                                <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span
                                    class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span
                                    class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span>
                                <span class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <span
                                    class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span
                                    class="check"></span> </label> </div>
                    </form>
                </div>
            </section> <!-- Products Section -->
            <section id="products">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-md-0 pt-4">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-0 pt-4">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                            <div class="card p-2" style="border-radius: 15px;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0">HP Notebook</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                                    class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-0">HP Notebook</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="text-muted mb-0" style="font-size: 0.95em;">Available: <span
                                                class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning" style="scale: 0.9;">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-wrap">
                                        <a href="#" class="btn  btn-primary float-right" data-abc="true"> Add
                                            Cart </a>
                                        <div class="price-wrap">
                                            <span class="price h5">$999</span> <br> <small class="text-success">Free
                                                shipping</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
