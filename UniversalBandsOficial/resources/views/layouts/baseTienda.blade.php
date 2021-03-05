
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tienda Universal Bands</title>
 
<!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/tienda.css">

<!-- JavaScript -->
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</head>

</head>
<body>
<div id="main-wraper">


<!-- HEADER -->
@include("partials.header")



@include("partials.left")


<!-- CONTENIDO -->

<!-- solo es el nombre del espacio lo que esta dentro del parentesis en resumen se crea un campo-->
@yield("contents")


<!-- footer -->
@include("partials.footer")






