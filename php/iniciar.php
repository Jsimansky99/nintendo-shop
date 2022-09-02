<!-- INICIO DE SESION / --> 

<?php
session_start();
$usuario=$_SESSION['nombre_usuario'];
$password=$_SESSION['password_usuario'];

echo "<h2> Has ingresado al sistema</h2>";
mail('eli.guerrerou@gmail.com, josephsdo@gmail.com' ,"Prueba de correo",
"Este es el mensaje del correo.................");

?> 