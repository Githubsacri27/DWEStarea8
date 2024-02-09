<!DOCTYPE html>
<html lang="es">

<head>
	<title>DWES-T8</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<header>
		<h1>Tarea Individual 8: Ajax</h1>
	</header>
	<main>
		<div class="container mt-4">
			<div class="card">
				<div class="card-header text-center font-weight-bold">
					<h2>Buscar libros</h2>
				</div>
				<div class="card-body">
					<form name="buscarLibros" id="buscarLibros" method="post" action="javascript:void(0)">
						@csrf
						<div class="search">
							<label for="titulo">Título:</label>
							<input type="text" id="texto" name="texto">
						</div>
						<span id="sugerencias"></span>
					</form>
				</div>
			</div>
			<p>
				<span id="sugerencias"></span>
			</p>
		</div>
		<footer>
			<p>Realizado por: Rubén Sacristán Mor 46407574-Z <a href="https:///index.html" alt="documentacion">Ver documentación</a></p>
		</footer>
		<script>
			var librosConsultarUrl = "{{url('/libros/consultar')}}";
		</script>
		<script src="{{ secure_asset('assets/js/main.js') }}"></script>
</body>

</html>