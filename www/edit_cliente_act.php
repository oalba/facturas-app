<?php
$data = $_GET['cif'];

$dp = mysql_connect("localhost", "root", "" );
mysql_select_db("facturas", $dp);

//$tlf = $_POST['telephone'];
$direccion = $_POST['direccion'];
$cuenta = $_POST['cuenta'];
//$direccion = trim(preg_replace('/\s\s+/', ' ', $direccion));

$aldatu="UPDATE clientes SET direccion='$direccion',cuenta='$cuenta' WHERE cif='$data'";
mysql_query($aldatu);
header("Location: edit_cliente.php?cif=$data");
mysql_close($dp);
?>