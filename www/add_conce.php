<html>
<head>
<title>Añadir concepto</title>
</head>
<body>
    <h1><u><i>Nuevo concepto</i></u></h1>
    <script type="text/javascript">
function seguro($con){
confirmar=confirm("¿Seguro que quiere eliminar el concepto: " + $con + "?"); 
    if (confirmar) {
        // si pulsamos en aceptar
        alert('El concepto será eliminado.');
        window.location='delete_conce.php?concepto='+$con;
        return true;
    }else{ 
        // si pulsamos en cancelar
        return false;
    }           
}
</script>

Añadir concepto: <br/><br/>
<table border=0>
    <tr><th>Concepto</th><th>Precio</th></tr>
    <form enctype='multipart/form-data' action='' method='post'>
        <tr>
            <td><textarea name='concepto' rows="1" cols="50"></textarea></td>
            <td><input type='number' name='precio' step="any" Style="width:60Px">€</td>
            <td><input type='submit' name='guardar' value='Guardar'/></td>
        </tr>
    </form>
</table>

<?php
if(isset($_POST['guardar'])){
    $conce = $_POST['concepto'];
    $precio = $_POST['precio'];
    $conce = trim(preg_replace('/\s\s+/', ' ', $conce));

    $dp = mysql_connect("localhost", "root", "" );
	mysql_select_db("facturas", $dp);

    $sql = "SELECT * FROM conceptos WHERE concepto='$conce'";
    $cons = mysql_query($sql);
    if (mysql_num_rows($cons) == 0){
        $sartu="INSERT INTO conceptos (concepto, precio) VALUES ('$conce', '$precio')";
        mysql_query($sartu);
        echo "Concepto añadido correctamente.<br/>";
    } else {
        echo "¡ERROR! Este concepto ya existe.";
        $num_fila = 0; 
        echo "<table border=1>";
        echo "<tr bgcolor=\"bbbbbb\" align=center><th>Concepto</th><th>Precio</th></tr>";
        while ($row = mysql_fetch_assoc($cons)) {
            echo "<tr "; 
            if ($num_fila%2==0) 
                echo "bgcolor=#dddddd"; //si el resto de la división es 0 pongo un color 
            else 
                echo "bgcolor=#ddddff"; //si el resto de la división NO es 0 pongo otro color 
            echo ">";
            echo "<td>$row[concepto]</td>";
            echo "<td>$row[precio]€</td>";
            echo "<td><a href=\"edit_conce.php?concepto=$row[cod_con]\"><input type=\"button\" value=\"Editar\"></a></td>";
            //echo "<td><button onclick=\"seguro($row[cod_con]);\">Delete</button></td>";
            echo "</tr>";
            $num_fila++;
        }
        echo "</table><br/>";
    }

    mysql_close($dp);
}
?>
</body>
</html>