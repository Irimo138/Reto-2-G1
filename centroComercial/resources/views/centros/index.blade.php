<!DOCTYPE html>
<html>
	<head>
		<title>Landing Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('estilos/landingpage.css')}}">
	</head>
	<header>
		<h1>CENTRO COMERCIAL</h1>
	</header>
	<body>
		<section>
			<ul class="slider">
			    <li id="slide">
			    	<a href="{{route('zara')}}" id="enlaces">
			    		<img src="{{ asset('multimedia/centro.png') }}" id="imagenes">
			    	</a>
			    </li>
			</ul>
			<aside>
				<h3>Horario:</h3>
				<table>
				<tr>
					<th>Lunes</th>
					<th id="lunes">Abierto</th>
				</tr>
				<tr>
					<th>Martes</th>
					<th id="martes">Abierto</th>
				</tr>
				<tr>
					<th>Miercoles</th>
					<th id="miercoles">Abierto</th>
				</tr>
				<tr>
					<th>Jueves</th>
					<th id="jueves">Abierto</th>
				</tr>
				<tr>
					<th>Viernes</th>
					<th id="viernes">Abierto</th>
				</tr>
				<tr>
					<th>Sabado</th>
					<th id="sabado">Abierto</th>
				</tr>
				<tr>
					<th>Domingo</th>
					<th id="domingo">Mañanas abierto</th>
				</tr>
				</table>
			</aside>
	 			<nav>
		    		<ul class="menu">
				        <li><a onmouseover="slide1()">Zara</a></li>
				        <li><a onmouseover="slide2()">Nike</a></li>
				        <li><a onmouseover="slide3()">MCDonalds</a></li>
				        <li><a onmouseover="slide4()">Adidas</a></li>
				        <li><a onmouseover="slide5()">Pull & Bear</a></li>
					</ul>
				</nav>
		</section>
		<script type="text/javascript">
			function slide1(){
				document.getElementById("enlaces").href = "{{route('zara')}}";
				document.getElementById("imagenes").src = "{{ asset('multimedia/zara.jpg') }}";
				
				document.getElementById("lunes").innerHTML = "8:00 - 14:00";
				document.getElementById("martes").innerHTML = "8:00 - 14:00";
				document.getElementById("miercoles").innerHTML = "8:00 - 14:00";
				document.getElementById("jueves").innerHTML = "8:00 - 14:00";
				document.getElementById("viernes").innerHTML = "8:00 - 14:00";
				document.getElementById("sabado").innerHTML = "8:00 - 14:00";
			}
			function slide2(){
				document.getElementById("enlaces").href = "{{route('nike')}}";
				document.getElementById("imagenes").src = "{{ asset('multimedia/nike.jpg') }}";

				document.getElementById("lunes").innerHTML = "8:00 - 14:00";
				document.getElementById("martes").innerHTML = "8:00 - 14:00";
				document.getElementById("miercoles").innerHTML = "8:00 - 14:00";
				document.getElementById("jueves").innerHTML = "8:00 - 14:00";
				document.getElementById("viernes").innerHTML = "8:00 - 14:00";
				document.getElementById("sabado").innerHTML = "8:00 - 14:00";
			}
			function slide3(){
				document.getElementById("enlaces").href = "{{route('macdonals')}}";
				document.getElementById("imagenes").src = "{{ asset('multimedia/mcdonalds.jpg') }}";


                document.getElementById("lunes").innerHTML = "8:00 - 14:00";
				document.getElementById("martes").innerHTML = "8:00 - 14:00";
				document.getElementById("miercoles").innerHTML = "8:00 - 14:00";
				document.getElementById("jueves").innerHTML = "8:00 - 14:00";
				document.getElementById("viernes").innerHTML = "8:00 - 14:00";
				document.getElementById("sabado").innerHTML = "8:00 - 14:00";
			}
			function slide4(){
				document.getElementById("enlaces").href = "{{route('adidas')}}";
				document.getElementById("imagenes").src = "{{ asset('multimedia/adidas.jpg') }}";

                document.getElementById("lunes").innerHTML = "8:00 - 14:00";
				document.getElementById("martes").innerHTML = "8:00 - 14:00";
				document.getElementById("miercoles").innerHTML = "8:00 - 14:00";
				document.getElementById("jueves").innerHTML = "8:00 - 14:00";
				document.getElementById("viernes").innerHTML = "8:00 - 14:00";
				document.getElementById("sabado").innerHTML = "8:00 - 14:00";
			}
			function slide5(){
				document.getElementById("enlaces").href = "{{route('pyb')}}";
				document.getElementById("imagenes").src = "{{ asset('multimedia/pullandbear.jpg') }}";

                document.getElementById("lunes").innerHTML = "8:00 - 14:00";
				document.getElementById("martes").innerHTML = "8:00 - 14:00";
				document.getElementById("miercoles").innerHTML = "8:00 - 14:00";
				document.getElementById("jueves").innerHTML = "8:00 - 14:00";
				document.getElementById("viernes").innerHTML = "8:00 - 14:00";
				document.getElementById("sabado").innerHTML = "8:00 - 14:00";
			}
		</script>
	</body>
</html>