﻿<?php
//Descomentar para probar en local
//Hacer git checkout de este file para no subir los cambios de las cadenas de conexión local
// $HOST = 'mysql:host=localhost; dbname=secuencialab';
// $USER = 'root';
// $PASS = ''; // quitar esta contraseña y dejarla vacía

$HOST = 'mysql:host=localhost; dbname=id11295144_secuencialab1';
$USER = 'id11295144_adminsecuencialab1';
$PASS = 'secuencialabcucei'; // quitar esta contraseña y dejarla vacía

try {
	$baseDatos = new PDO ($HOST, $USER, $PASS);
  	$baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$baseDatos->exec("SET CHARACTER SET UTF8");
} catch(Exception $exec) {
	die('Error al acceder a la base de datos: '. $exec->GetMessage());
}
?>
