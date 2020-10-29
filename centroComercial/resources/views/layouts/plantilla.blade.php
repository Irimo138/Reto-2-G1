<!DOCTYPE html>
<html>
<head>
	<title>@yield('tienda: '.'title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('estilos/editor.css')}}">
</head>
<body>
	<header>
		<h1>@yield('title')</h1>
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
				<p>Stock:<br><input type="text" name="stock"/></p>
				<br>
				<p>Codigo:<br><input type="text" name="codigo"/></p>
				<br>
				<p>Imagen:<br>
					<input type="file" name="imagen" accept="image/png, .jpeg, .jpg">
				</p>
				<br>
				<input type="submit" name="enviar" value="Añadir Producto" onclick="crearProducto()">
			</form>
			<input type="button" name="añadir" value="Añadir" onclick="crearProducto()">
		</fieldset>
	</aside>
	<section>
		<span class="BotonEditor">
			<img src="{{ asset('multimedia/llaves.png') }}" style="width: 30px; height: 30px" onclick="openNav()";>
			<a class="BotonHome" href="{{route('index')}}"><img src="{{ asset('multimedia/home.png') }}" style="width: 30px; height: 30px; margin-left:14px"></a>
		</span>
		<div id="articulos" class="row"> <!-- Productos en Flex que se añadiran mediante events-->
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
				</div>
			</article>
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
				</div>
			</article>
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
				</div>
			</article>
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
				</div>
			</article>
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
				</div>
			</article>
			<article>
				<img src="{{ asset('multimedia/prueba.png') }}">
				<div class="texto">
					<h3>Nombre</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
					<p>Stock: <span>0</span></p>
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
		function crearProducto(){
			//crear article
			console.log("entra en la function");
			var articulo = document.createElement("article");
				//crear img y div dentro de article
				var imagen = document.createElement("img");
				imagen.setAttribute('src', 'multimedia/prueba.png');

				articulo.appendChild(imagen);
				
				var texto = document.createElement("div");
				/*
				Contenido del div:
					-h3
					-br
					-p
					-br
					-p
						-span
				*/
				//h3
					var titulo = document.createElement("h3");
					texto.appendChild(titulo);
						var conttitulo = document.createTextNode("Nombre");//esta linea deberia rellenarse con el formulario
						titulo.appendChild(conttitulo);
				//br
					var siguientelinea1 = document.createElement("br");
					texto.appendChild(siguientelinea1);

				//p
					var parrafo = document.createElement("p");
					texto.appendChild(parrafo);
						var contparrafo = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");//esta linea deberia rellenarse con el formulario
						parrafo.appendChild(contparrafo);
				//br
					var siguientelinea2 = document.createElement("br");
					texto.appendChild(siguientelinea2);
				//p
					var stock = document.createElement("p");
					texto.appendChild(stock);
						var contstock = document.createTextNode("Stock: ");
						stock.appendChild(contstock);
					var numerostock = document.createElement("span");
						var numerostock = document.createTextNode("0");//esta linea deberia rellenarse con el formulario
					texto.appendChild(numerostock);
				
				articulo.appendChild(texto);
				document.getElementById("articulos").appendChild(articulo);
		}
		function eliminarProducto(){
			articulo.parentNode.removeChild(articulo);
		}
	</script>
</body>
</html>