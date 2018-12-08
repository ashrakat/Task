<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
 <body>
  <div class = 'container'>
    <div class = 'row'>
      <div = class = 'md-col-3 offset-md-4'>
        <h4><center>Get Product Info</center></h4>
        <form method = 'GET' action = "{{url('api/product')}}" >
          <div class = 'form-group'>
            <p>name:
            <input type = 'text' name ='name' class = 'form-control'/>
            <p>
          </div>
          <div class = 'form-group'>
            <input type = 'submit' name ='submit' value = 'Find' class = 'btn btn-primary'/>
          </div>
        </form>
        @isset($product)
        <h4>Name: {{$product->name}}</h4>
        <p>Id: {{$product->id}}</p>
        <p>Created At: {{$product->created_at}}</p>
        @endisset
        @isset($error)
        <h4 style="color:red">Error: {{$error}}</h4>
        @endisset
      </div>
    </div>
  </div>
 </body>
</html>
