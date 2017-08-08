<html lang="en">
	<head>
		<title> Blade Template </title>
		<!--{{Html::style('https://maxcdn.bootstrapcdn.com/bootstratp/3.3.0/css/bootstrap.min.css')}} -->
			{{Html::style('https://is.muni.cz/do/rect/el/nastroje/drag_and_drop_e/sample.css')}}
	</head>
	<body>
		<div class = "container">
			<div class = "jumbotron">
				<h1>Blade Template Laravel</h1>
				<p>@yield('content')</p>
				<p><a href="#" class = "btn btn-primary btn-lg"> Learn More </a> </p>
			</div>
			<form method="post" action="#">
			</form>
		</div>
		
		{{Form::checkbox('nama','nilai')}}
			{{Form::password('password',['class'=>'keren'])}}
				{{Form::submit('Klik donk')}}
		//
		
		
	</body>
</html>
