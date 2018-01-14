<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="login" method="POST" role="form">
			{{csrf_field()}}

			{{-- <input type="hidden" value="put" name="_method"> --}}

			{{-- {{_method_field()}} --}}
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Email" name="email" value="{{$email}}">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" class="form-control" id="" placeholder="Password" name="password" value="">
			</div>

			{{ $password }}
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>