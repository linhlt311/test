<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zent Group</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        a, form {
           display: inline-block;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Products</h2>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

     <a href="{{url('products/create')}}"><button class="btn btn-primary">Thêm mới</button></a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>
          <a href="#" class="btn btn-info">Detail</a>
          <a href="#" class="btn btn-success">Edit</a>

          <form action="#" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>