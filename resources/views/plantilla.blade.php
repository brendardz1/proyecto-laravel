<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elecciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/844dec5863.js" crossorigin="anonymous"></script>

</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
    <header>
    
        <nav class="navegacion">
			<ul class="menu">
          
            <li class="nav-menu-item"><a href="#"class="nav-menu-link nav-link">Candidato</a>
                <ul class="submenu">
						<li class="li_class"><a href="/candidato/create">Create</a></li>
						<li class=""><a href="/candidato">List</a></li>
            
					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Casilla</a>
                <ul class="submenu">
						<li><a href="/casilla/create" >Create</a></li>
						<li><a href="/casilla">List</a></li>
                        <li><a href="/casilla/pdf">PDF</a></li>
            
					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Elección</a>
					<ul class="submenu">
						<li><a href="/eleccion/create">Create</a></li>
						<li><a href="/eleccion">List</a></li>
						
					</ul>
				</li> 
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Voto</a>
					<ul class="submenu">
						<li><a href="/voto/create">Create</a></li>
						<li><a href="/voto">List</a></li>
						
					</ul>
				</li> 
                <li class="nav-menu-item"><a href="/preview" class="nav-menu-link nav-link">Grafica</a></li>
            </li> 
            <li class="nav-menu-item"><a href="/login" class="nav-menu-link nav-link">Cerrar Sesion</a></li>
			</ul> 
		</nav>


        <div class="row">
            <div class="col-md-2">
                <img src="/tecnm_sintexto.svg" width="200px">
            </div>
            <div class="col-md-8 text-center">
                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la reina ITVO</h5>
            </div>
            <div class="col-md-2">

            </div>

        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
<script type="text/javascript"
src="{{ asset ('js/custom.js') }}">

</script>
</body>
</html>