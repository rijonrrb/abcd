<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<style>
 .badge:after{
        content:attr(value);
        font-size:24px;
        color: #fff;
        background: red;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }
</style>

</head>
<body style="background-color: #eee;"> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-3" href="{{route('addproduct')}}">Add Product</a>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      @if(!empty($count))                       
      <li class="nav-item">
        <a href="{{route('cart')}}"><i class="fa badge fa-lg" style="color: #000000;" value={{$count}}>&#xf07a;</i></a>  
      </li>
      @else
      <li class="nav-item">
        <i class="fa fa-lg" style="color: #000000; margin-right: 20px; margin-top: 8px">&#xf07a;</i>
      </li>
      @endif

      <li class="nav-item">
        <a class="navbar-brand" href="{{route('login')}}">Login</a>
      </li>
    </ul>
    
    
  </nav>
    <div class="container py-5 mb-5">
      <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-2">
        @foreach($lastProducts as $lastProduct)
        <div class="col">
          <form action="{{route('buyproduct')}}" method="post">
            {{csrf_field()}}

          <div class="card" style="border-radius: 15px;">
            <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/12.webp"
                style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                alt="Laptop" />
              <a href="#!">
                <div class="mask"></div>
              </a>
            </div>
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <div>
                  <input type="hidden" id="pname" name="pname" value={{$lastProduct->name}}>
                  <p><a href="#!" class="text-dark">{{$lastProduct->name}}</a></p>
                </div>
                <div>
                  <input type="hidden" id="pcategory" name="pcategory" value="{{$lastProduct->category}}">
                  <p class="small text-muted">{{$lastProduct->category}}</p>
                </div>
              </div>
              
            <hr class="my-0" />
            <div class="card-body pb-0">
              <div class="d-flex justify-content-center">
                <input type="hidden" id="pdescription" name="pdescription" value="{{$lastProduct->description}}">
                <p class="text-dark">{{$lastProduct->description}}</p>
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p><a href="#!" class="text-dark">Price</a></p>
                <input type="hidden" id="pprice" name="pprice" value="{{$lastProduct->price}}">
                <p class="text-dark">{{$lastProduct->price}}</p>
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
              <div class="d-flex justify-content-center align-items-center pb-2 mb-1">
                <button type="submit" class="btn btn-primary btn-block"> Buy Product </button>
              </div>
            </div>
            </div>
          </div>
          </form>
        </div>
        @endforeach
      </div>
      <div class="row">
        {{ $lastProducts->links('pagination::bootstrap-5') }}
      </div>
    </div>
</body>
<html>