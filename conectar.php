<?php

  include("config.php"); 
  $conexion=mysql_connect("localhost","root","scott123") or die("Error: El servidor no puede conectar con la base de datos");
  $descriptor=mysql_select_db("codeka",$conexion);

?>
