<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
 <body>
  <div class = 'container'>
    <div class = 'row'>
      <div = class = 'md-col-3 offset-md-4'>
        <h4><center>Add Product</center></h4>
        <form method = 'POST' action = "{{url('api/products')}}" >
          <div class = 'form-group'>
            <p>name:
            <input type = 'text' name ='name' class = 'form-control'/>
            <p>
          </div>
          <div class = 'form-group'>
            <input type = 'submit' name ='submit' value = 'Add' class = 'btn btn-primary'/>
          </div>
        </form>
      </div>
    </div>
  </div>
 </body>
</html>
