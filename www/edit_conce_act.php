<?php
$data = $_GET['cod_con'];

$dp = mysql_connect("localhost", "root", "" );
mysql_select_db("facturas", $dp);

$concepto = $_POST['concepto'];
$precio = $_POST['precio'];
$concepto = trim(preg_replace('/\s\s+/', ' ', $concepto));

$aldatu="UPDATE conceptos SET concepto='$concepto',precio='$precio' WHERE cod_con=$data";
mysql_query($aldatu);
header("Location: edit_conce.php?cod_con=$data");

mysql_close($dp);
?>