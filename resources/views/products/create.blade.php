<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zent Group</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
	<div class="container">
		<h2>Create A Product</h2><br  />
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br />
		@endif
		@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
		@endif      
		<form method="post" id="add-product" action="#">
			{{csrf_field()}}
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Name:</label>
					<input  type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="price">Price:</label>
					<input  type="text" id="price" class="form-control" name="price" value="{{old('price')}}">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="price">Quantity:</label>
					<input  type="text" class="form-control" name="quantity" id="quantity" value="{{old('quantity')}}">
				</div>
			</div>
		</div>   

		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left:130px">Add Product</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		$('#add-product').on('submit', function (e) {
			
			//chan reload mac dinh cua form
			e.preventDefault();

			$.ajax({
				type: 'post',
				data: {
					name: $('#name').val(),
					price: $('#price').val(),
					quantity: $('#quantity').val(),
				},
				url: '{{route("products.store")}}',
				success: function (response) {

					toastr.success(response.name + ' has been added');

					setTimeout(function (){
						window.location.href="{{route('products.index')}}";
					}, 800);

				}, error: function (xhr, ajaxOptions, thrownError) {

					
					toastr.error(xhr.status + ': ' + thrownError);
			     }
			});


			
		})



	});
</script>
</body>
</html>