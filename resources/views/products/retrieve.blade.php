<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
 <body>
  <div class = 'container'>
    <div class = 'row'>
      <div = class = 'md-col-3 offset-md-4'>
        <h4><center>Show Products</center></h4>
        <ul>
          @foreach($products->all() as $product)
            <li><a href="{{url('api/products/{id}')}}"/>{{$product->name}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
 </body>
</html>
