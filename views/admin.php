<?php

session_start();
if(!isset($_SESSION['IS_SESSION'])){
	header('Location: ../views/signup.php');         
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <ttle>prinadmin</title>
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/estilo2.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../assets/js/mainscript.js"></script>
	<script src="../assets/js/2.js"></script>

    
</head>
<body>

<a  href="../controller/logOutController.php">Cerrar sesión</a>

	<header>
		   <div class="contenedor">
			<div class="logo">
			<center><img src="../assets/img/logotipo.jpg" alt=""></center>
			</div>
			<nav class="menunumero1" id="menunumero1">

			<!--menu en escroll <nav class="menu-fixed">-->
		<!--		ul>li*4>a -->
		      <ul>
		     	<li><a href="#"><h2>SOFTWARE GESTIÓN DE HORARIOS DEL C.D.M<h2></a></li>
		  
		      </ul>
			</nav>
		   </div>
		</header>
		<main>
	  <div class="contenedor">
<article>
	<h2>Articulo principal</h2>
<p>	1.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	2.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	3.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	4.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	5.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<!--/////////////////////////////////////////////////////////////////////////////////////////-->
<div class="contenedor">
            <div class="titulo">¿Sobre que escribiré en el blog?</div>
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>HTML</a>
                    </li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>CSS</a>
                    </li>
                    <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>JavaScript</a>
                    </li>
                    <li id="pestana4"><a href='javascript:cambiarPestanna(pestanas,pestana4);'>PHP</a>
                    </li>
                    <li id="pestana5"><a href='javascript:cambiarPestanna(pestanas,pestana5);'>Java EE</a>
                    </li>
                    <li id="pestana6"><a href='javascript:cambiarPestanna(pestanas,pestana6);'>Android</a>
                    </li>
                </ul>
            </div>
            
            <body onload="javascript:cambiarPestanna(pestanas,pestana6);">
                <div id="contenidopestanas">
                    <div id="cpestana1">HTML, siglas de HyperText Markup Language («lenguaje de marcado de hipertexto»), hace referencia al lenguaje de marcado predominante para la elaboración de páginas web que se utiliza para describir y traducir la estructura y la información en forma de texto, así como para complementar el texto con objetos tales como imágenes. El HTML se escribe en forma de «etiquetas», rodeadas por corchetes angulares (
                        <,>). HTML también puede describir, hasta un cierto punto, la apariencia de un documento, y puede incluir un script (por ejemplo JavaScript), el cual puede afectar el comportamiento de navegadores web y otros procesadores de HTML.</div>
                    <div id="cpestana2">El nombre hojas de estilo en cascada viene del inglés Cascading Style Sheets, del que toma sus siglas. CSS es un lenguaje usado para definir la presentación de un documento estructurado escrito en HTML o XML2 (y por extensión en XHTML). El W3C (World Wide Web Consortium) es el encargado de formular la especificación de las hojas de estilo que servirán de estándar para los agentes de usuario o navegadores.</div>
                    <div id="cpestana3">JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,3 basado en prototipos, imperativo, débilmente tipado y dinámico.</div>
                    <div id="cpestana4">PHP es un lenguaje de programación de uso general de script del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico. Fue uno de los primeros lenguajes de programación del lado del servidor que se podían incorporar directamente en el documento HTML en lugar de llamar a un archivo externo que procese los datos. El código es interpretado por un servidor web con un módulo de procesador de PHP que genera la página Web resultante. PHP ha evolucionado por lo que ahora incluye también una interfaz de línea de comandos que puede ser usada en aplicaciones gráficas independientes. PHP puede ser usado en la mayoría de los servidores web al igual que en casi todos los sistemas operativos y plataformas sin ningún costo.</div>
                    <div id="cpestana5">Java Platform, Enterprise Edition o Java EE (anteriormente conocido como Java 2 Platform, Enterprise Edition o J2EE hasta la versión 1.4; traducido informalmente como Java Empresarial), es una plataforma de programación—parte de la Plataforma Java—para desarrollar y ejecutar software de aplicaciones en el lenguaje de programación Java. Permite utilizar arquitecturas de N capas distribuidas y se apoya ampliamente en componentes de software modulares ejecutándose sobre un servidor de aplicaciones. La plataforma Java EE está definida por una especificación. Similar a otras especificaciones del Java Community Process, Java EE es también considerada informalmente como un estándar debido a que los proveedores deben cumplir ciertos requisitos de conformidad para declarar que sus productos son conformes a Java EE; estandarizado por The Java Community Process / JCP.</div>
                    <div id="cpestana6">Android es un sistema operativo móvil basado en Linux, que junto con aplicaciones middleware8 está enfocado para ser utilizado en dispositivos móviles como teléfonos inteligentes, tabletas, Google TV y otros dispositivos.9 Es desarrollado por la Open Handset Alliance, la cual es liderada por Google. Este sistema por lo general maneja aplicaciones como Google Play.</div>
                </div>
        </div>
   <h3>Subseccion</h3>
<p>
	6.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	7.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	8.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	9.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	10.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	11.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	12.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	13.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	14.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	15.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	16.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	17.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	18.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>
<p>
	19.-este campo puede conterner variedad de texto de cualquier tematica especifica 
</p>

</article>
   </div>	
	</main>
<aside>
	<h2>HISTORIAL</h2>
<!--li*5>a-->
<ul>
	<li><a href="#">Escribir texto</a></li>
	<li><a href="#">Escribir texto</a></li>
	<li><a href="#">Escribir texto</a></li>
	<li><a href="#">Escribir texto</a></li>
	<li><a href="#">Escribir texto</a></li>
</ul>
</aside>

	
   
	

    
    <?php 
        //verificar si hay sesion[]

    ?>

    <p>pagina del adminstrador</p>


</body>
</html>