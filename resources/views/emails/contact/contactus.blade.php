<!DOCTYPE html>
<html>
<head>
	<title>{{ $data['username'] }}</title>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="well" style="padding: 15px; margin: 12px; ">
			<address>
				<h3><b>Contact Person: {{$data['username']}}</b></h3>
				<h3><b>E-mail Address: {{$data['email']}}</b></h3>
				<h3><b>Phnone : {{$data['phone']}}</b></h3>
				<h3><b>Subject : {{$data['topic']}}</b></h3>
			</address>
			<address>
				<h3><b>Client Message : </h3>
				<div class="aler alert-waring" style="line-height: 2.5em">{{ $data['message'] }}</div>
			</address>
			
		</div>
	</div>

</body>
</html>