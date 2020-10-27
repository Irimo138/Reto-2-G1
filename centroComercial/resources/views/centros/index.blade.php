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
			    <li id="slide1">
			    	<a href="centros/zara" class="enlaces">
			    		<img src="{{asset('multimedia/zara.jpg')}}" class="imagenes">
			    	</a>
			    </li>
				<li id="slide2">
					<a href="centros/nike" class="enlaces">
						<img src="multimedia/nike.jpg" class="imagenes">
					</a>
				</li>
			    <li id="slide3" class="imagenes">
			    	<a href="centros/macdonals" class="enlaces">
			    		<img src="multimedia/mcdonalds.jpg" class="imagenes">
			    	</a>
			    </li>
			    <li id="slide4" class="imagenes">
			    	<a href="centros/adidas" class="enlaces">
			    		<img src="multimedia/adidas.jpg" class="imagenes">
			    	</a>
			    </li>
			    <li id="slide5" class="imagenes">
			    	<a href="centros/pyb" class="enlaces">
			    		<img src="multimedia/pullandbear.jpg" class="imagenes">
			    	</a>
			    </li>
			</ul>
	 			<nav>
		    		<ul class="menu">
				        <li><a href="#slide1">Zara</a></li>
				        <li><a href="#slide2">Nike</a></li>
				        <li><a href="#slide3">MCDonalds</a></li>
				        <li><a href="#slide4">Adidas</a></li>
				        <li><a href="#slide5">Pull & Bear</a></li>
					</ul>
				</nav>
		</section>
	</body>
</html>