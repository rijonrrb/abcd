<html>

<head>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        div.stars {
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 1px;
            font-size: 36px;
            color: #4A148C;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="card bg-light mt-5">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('failed'))
                <div class="alert alert-danger alert-dismissible">

                    {!! \Session::get('failed') !!}
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">

                    {!! \Session::get('success') !!}
                </div>
            @endif

            <article class="card-body mx-auto mt-3" style="max-width: 400px;">
                <form action="{{ route('addproduct') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="name" class="form-control" placeholder="Product name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="category" class="form-control" placeholder="Product description" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="description" class="form-control" placeholder="Product category" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="price" class="form-control" placeholder="Product price" type="text">
                    </div> <!-- form-group// -->                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="stock" class="form-control" placeholder="Product stock" type="text">
                    </div> <!-- form-group// -->
                    <div class="stars form-group input-group" >
                        <label class="mt-3 h5 mr-3">Rating :</label>
                        <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
                        <label class="star star-5" for="star-5" style="scale: 0.8;"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star" value="4" />
                        <label class="star star-4" for="star-4" style="scale: 0.8;"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star" value="3" />
                        <label class="star star-3" for="star-3" style="scale: 0.8;"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star" value="2" />
                        <label class="star star-2" for="star-2" style="scale: 0.8;"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star" value="1" />
                        <label class="star star-1" for="star-1" style="scale: 0.8;"></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Submit Product </button>
                        <a class="btn btn-primary btn-block" href="{{ route('welcome') }}">Go Back</a>
                    </div> <!-- form-group// -->
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</body>
<html>
