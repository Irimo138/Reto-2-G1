<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('estilos/editor.css')}}">
</head>
<body>
	<header>
		<a class="enltitulo" href="index.html"><h1>@yield('title')</h1></a>
	</header>
	<aside id="mySidenav" class="sidenav"> <!-- Aside desplegable -->
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<h1>Editor</h1>
		<p>Introduzca en el siguiente formulario los datos del nuevo producto.</p>
		<br>
		<fieldset>
			<legend>Nuevo Producto</legend>
			<form method="post" name="formulario">
				<p>Nombre:<br><input type="text" name="nombre"/></p>
				<br>
				<p>Descripción:<br><textarea cols="14" rows="4" name="descripcion"></textarea></p>
				<br>
				<p>Imagen:<br><input type="file" name="imagen" accept="image/png, .jpeg, .jpg"/></p>
				<br>
				<p>Stock:<br><input type="text" name="stock"/></p>
				<br>
				<p>Precio:<br><input type="text" name="precio"/></p>
				<br>
				<p>Codigo:<br><input type="text" name="codigo"/></p>
                <br>
				<input type="submit" name="enviar" value="Añadir Producto">
			</form>
			<?php
				$servidor = 'localhost';
				$nombreusuario = 'root';
				$password = 'root';
				$db = 'reto';

				$conexion = new mysqli($servidor,$nombreusuario,$password,$db);

				if ($conexion -> connect_error) {
					die('conexion fallida '.$conexion -> connect_error);
				}
				if (isset($_POST['nombre'])) {
					$nombre = $_POST['nombre'];

					$sql = 'INSERT INTO producto(nombre,descripcion)';
				}
				
			?>
				</fieldset>
	</aside>
	<section>
		<span class="BotonEditor" onclick="openNav()";><img src="multimedia/llaves.png" style="width: 20px; height: 20px">Editor</span>
		<div class="row"> <!-- Productos en Flex que se añadiran mediante events-->
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
			<article>
				<img src="multimedia/prueba.png">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: 0</p>
				</div>
			</article>
		</div>
	</section>
	<script type="text/javascript">
		function openNav(){
			document.getElementById("mySidenav").style.width = "250px"
		}
		function closeNav(){
			document.getElementById("mySidenav").style.width = "0";
		}
		
	</script>
</body>
</html>