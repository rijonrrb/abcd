<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    <a class="navbar-brand mb-3 text-primary" href="{{route('welcome')}}">Home</a>   
  </nav>
 

    <div class="table-responsive custom-table-responsive mt-4">

      <table class="table table-striped">
        <thead>
          <tr>  
            <th scope="col">SL.</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php        
          $i = 1; 
          @endphp
          @foreach($Products as $Product)
          <tr scope="row">
              <td >{{$i++}}</td>
              <td >{{$Product->pname}}</td>
              <td>{{$Product->pcategory}}</td>
              <td>{{$Product->pdescription}}</td>
              <td>{{$Product->pprice}} BDT</td>
              <td><a href="{{route('deletecart',['id'=>$Product->id])}}"><i class="material-icons" style="color:red" title="Delete">&#xE872;</i></a></td>
          </tr>
          <tr class="spacer"><td colspan="100"></td></tr>
          @endforeach

        </tbody>
      </table>

</div>

</body>
<html>