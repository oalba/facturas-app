<html>
<head><title>Añadir factura</title></head>
<body>
    <h1><u><i>Nueva factura</i></u></h1>
    <?php
    $dp = mysql_connect("localhost", "root", "" );
    mysql_select_db("facturas", $dp);
    ?>
<?php
    echo "
    <script type=\"text/javascript\">
    var nu = 2;
    function myFunction() {
        var ic = document.createTextNode('Cantidad: ');

        var ic1 = document.createElement('INPUT');
        ic1.setAttribute('type', 'number');
        ic1.setAttribute('name', 'cant'+nu);
        ic1.setAttribute('value', '1');
        ic1.setAttribute('Style', 'width:40Px');

        //---------------------------------------------

        var io = document.createTextNode(' Concepto: ');

        var io3 = document.createElement('select');
        //io3.id = 'mySelect';
        //io3.setAttribute('id', 'show'+nu);
        io3.setAttribute('name', 'conce'+nu);
        io3.setAttribute('onchange', 'change(this,'+nu+')');

        var no = document.createElement('option');
        no.value = '';
        no.text = '';
        no.setAttribute('selected', 'selected');
        io3.appendChild(no);

        var yes = document.createElement('option');
        yes.value = '1';
        yes.text = 'Otro';
        io3.appendChild(yes);";

        $sql = 'SELECT * FROM conceptos';
        $cons = mysql_query($sql);
        while ($row = mysql_fetch_assoc($cons)) {
            echo "var abc = document.createElement('option');";
            echo "abc.value = '$row[concepto]|$row[precio]';";
            echo "abc.text = '$row[concepto]';";
            echo "io3.appendChild(abc);";
        }

        
        echo "
        //Create array of options to be added
        //var array = ['YES','NO'];
        //Create and append the options
        /*for (var i = 0; i < array.length; i++) {
            var option = document.createElement('option');
            option.value = array[i];
            option.text = array[i];
            if (array[i] == 'NO') {
                option.setAttribute('selected', 'selected');
            }
            io3.appendChild(option);
        }*/

        var io2 = document.createElement('TEXTAREA');
        io2.setAttribute('id', 'text_area'+nu);
        io2.setAttribute('name', 'concepto'+nu);
        io2.setAttribute('cols', '50');
        io2.setAttribute('rows', '1');
        io2.setAttribute('style', 'display: none');

        //---------------------------------------------

        var ip = document.createTextNode(' Precio: ');

        var ip3 = document.createElement('INPUT');
        ip3.setAttribute('type', 'number');
        ip3.setAttribute('id', 'precio'+nu);
        ip3.setAttribute('name', 'precio'+nu);
        ip3.setAttribute('step', 'any');
        ip3.setAttribute('Style', 'width:60Px');

        var ie = document.createTextNode('€');
        //var hr = document.createElement('HR');
        

        /*var wrapper = document.getElementById('divWrapper');
        wrapper.appendChild(hr);
        wrapper.appendChild(ic);
        wrapper.appendChild(ic1);
        wrapper.appendChild(io);
        wrapper.appendChild(io3);
        wrapper.appendChild(io2);
        wrapper.appendChild(ip);
        wrapper.appendChild(ip3);
        wrapper.appendChild(ie);*/

        var tr = document.createElement('TR');
        var td1 = document.createElement('TD');
        var td2 = document.createElement('TD');
        var td3 = document.createElement('TD');
        td1.appendChild(ic);
        td1.appendChild(ic1);
        td2.appendChild(io);
        td2.appendChild(io3);
        td2.appendChild(io2);
        td3.appendChild(ip);
        td3.appendChild(ip3);
        td3.appendChild(ie);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        var wrapper = document.getElementById('myTable');
        wrapper.appendChild(tr);

        nu = nu+1;
     }</script>";
 
    ?>
    <!--<script type="text/javascript">
    var nu = 2;
    function myFunction() {

        var ic = document.createTextNode('Cantidad: ');

        var ic1 = document.createElement('INPUT');
        ic1.setAttribute('type', 'number');
        ic1.setAttribute('name', 'cant'+nu);
        ic1.setAttribute('value', '1');
        ic1.setAttribute('Style', 'width:40Px');

        //---------------------------------------------

        var io = document.createTextNode(' Concepto: ');

        var io3 = document.createElement('select');
        //io3.id = 'mySelect';
        //io3.setAttribute('id', 'show'+nu);
        io3.setAttribute('name', 'conce'+nu);
        io3.setAttribute('onchange', 'change(this,'+nu+')');

        var no = document.createElement('option');
        no.value = 'No';
        no.text = 'No';
        no.setAttribute('selected', 'selected');
        io3.appendChild(no);

        var yes = document.createElement('option');
        yes.value = '1';
        yes.text = 'Otro';
        io3.appendChild(yes);
        
        //Create array of options to be added
        //var array = ['YES','NO'];
        //Create and append the options
        /*for (var i = 0; i < array.length; i++) {
            var option = document.createElement('option');
            option.value = array[i];
            option.text = array[i];
            if (array[i] == 'NO') {
                option.setAttribute('selected', 'selected');
            }
            io3.appendChild(option);
        }*/

        var io2 = document.createElement('TEXTAREA');
        io2.setAttribute('id', 'text_area'+nu);
        io2.setAttribute('name', 'concepto'+nu);
        io2.setAttribute('cols', '50');
        io2.setAttribute('rows', '1');
        io2.setAttribute('style', 'display: none');

        //---------------------------------------------

        var ip = document.createTextNode(' Precio: ');

        var ip3 = document.createElement('INPUT');
        ip3.setAttribute('type', 'number');
        ip3.setAttribute('id', 'precio'+nu);
        ip3.setAttribute('name', 'precio'+nu);
        ip3.setAttribute('step', 'any');
        ip3.setAttribute('Style', 'width:60Px');

        var ie = document.createTextNode('€');
        //var hr = document.createElement('HR');
        

        /*var wrapper = document.getElementById('divWrapper');
        wrapper.appendChild(hr);
        wrapper.appendChild(ic);
        wrapper.appendChild(ic1);
        wrapper.appendChild(io);
        wrapper.appendChild(io3);
        wrapper.appendChild(io2);
        wrapper.appendChild(ip);
        wrapper.appendChild(ip3);
        wrapper.appendChild(ie);*/

        var tr = document.createElement('TR');
        var td1 = document.createElement('TD');
        var td2 = document.createElement('TD');
        var td3 = document.createElement('TD');
        td1.appendChild(ic);
        td1.appendChild(ic1);
        td2.appendChild(io);
        td2.appendChild(io3);
        td2.appendChild(io2);
        td3.appendChild(ip);
        td3.appendChild(ip3);
        td3.appendChild(ie);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        var wrapper = document.getElementById('myTable');
        wrapper.appendChild(tr);

        nu = nu+1;    
    }


    </script>-->

    <script type="text/javascript">
    function change(obj,nue) {
        var selectBox = obj;
        var nue = nue;
        var selected = selectBox.options[selectBox.selectedIndex].value;
        var sele = selected.split("|");
        var textarea = document.getElementById("text_area"+nue);

        if(sele[0] === "1"){
            textarea.style.display = "block";
        }
        else{
            textarea.style.display = "none";
        }
        document.getElementById("precio"+nue).value = sele[1];
    }

    function changeCli(obj) {
        var selectBox = obj;
        var selected = selectBox.options[selectBox.selectedIndex].value;
        var sele = selected.split("|");
        var textarea = document.getElementById("cliente1");
        var text = document.getElementById("cif1");

        if(sele[0] === "1"){
            textarea.style.display = "block";
            text.style.display = "none";
        }else if (sele[0] === ""){
            textarea.style.display = "none";
            text.style.display = "none";
        }else{
            textarea.style.display = "none";
            text.style.display = "block";
        }
        document.getElementById("cif1").value = sele[1];
    }
    </script>

    <style type="text/css">
        table { border: 1px solid black; border-collapse: collapse }
        td { border: 1px solid black }
    </style>

    <form enctype="multipart/form-data" action="" method="post">
        Fecha: <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>"/><br><br>

        Nº de factura: <input type="number" name="num" required/><br><br>

        <!--Método de pago: <input type="text" name="pago"/><br><br>-->
        <!--Método de pago: 
        <select name="pago"/>
            <option value="Transferencia" default>Transferencia</option>
        </select>
        <br><br>-->
        <!--Cliente: <br><input type="text" name="cli1"/><br><input type="text" name="cli2"/><br><input type="text" name="cli3"/><br><input type="text" name="cli4"/><br><input type="text" name="cli5"/><br><br>-->
        <label>Cliente:</label> 
        <select name="cli1" onchange="changeCli(this)">
            <option selected="selected"></option>
            <option value="1">Otro</option>
            <?php
            $sql = "SELECT * FROM clientes";
            $clis = mysql_query($sql);
            while ($row = mysql_fetch_assoc($clis)) {
                print("<option value='".$row[direccion]."|".$row[cif]."'>$row[direccion]</option>");
            }
        ?></select><input id="cif1" type="text" name="cif1" value="" style="display: none" disabled/><textarea id="cliente1" name="cliente1" rows="5" style="display: none"></textarea><br><br>

        Conceptos: 
        <table id="myTable">
            <tr>
                <td><label>Cantidad:</label> <input type="number" name="cant1" value="1" Style="width:40Px"/> </td>
                <td><label>Concepto:</label> 
                <select name="conce1" onchange="change(this,1)">
                    <option selected="selected"></option>
                    <option value="1">Otro</option>
                    <?php
                    $sql = "SELECT * FROM conceptos";
                    $cons = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($cons)) {
                        print("<option value='".$row[concepto]."|".$row[precio]."'>$row[concepto]</option>");
                    }
                    ?>
                </select><textarea id="text_area1" name="concepto1" rows="1" cols="50" style="display: none"></textarea></td>
                <td><label>Precio:</label> <input id="precio1" type="number" name="precio1" step="any" Style="width:60Px" value=""/>€</td>
            </tr>
            <!--<br>Cantidad: <input type="number" name="cant1" value="1" Style="width:40Px"/> Concepto: <textarea name="concepto1" rows="1" cols="50"></textarea> Precio: <input type="number" name="precio1" step="any" Style="width:60Px"/>€<br>-->
            <!--<br>Cantidad: <input type="number" name="cant1" Style="width:40Px"/> Concepto: <input type="text" name="concepto1" size="50"/> Precio: <input type="number" name="precio1" step="any" Style="width:60Px"/>€<br>-->
        </table>
        <button type="button" onclick="myFunction()">Añadir</button><br><br>
        IVA: <input type="number" name="iva" value="21" Style="width:40Px"/><br><br>
        <input type="submit" name="crear" value="Crear"/>
    </form>
<?php
if(isset($_POST['crear'])){
    $fecha = date_format(date_create_from_format('Y-m-d', $_POST['fecha']), 'd/m/Y');
    $insfecha = date("Y-m-d",strtotime($_POST['fecha']));
    $numero = $_POST['num'];
    //$pago = $_POST['pago'];
    $cli1 = $_POST['cli1'];
    //$cli2 = $_POST['cli2'];
    //$cli3 = $_POST['cli3'];
    //$cli4 = $_POST['cli4'];
    //$cli5 = $_POST['cli5'];
    $iva = $_POST['iva'];

    $comprobar = "SELECT * FROM facturas WHERE cod_fac=$numero";
    $compro = mysql_query($comprobar);
    if (mysql_num_rows($compro) != 0){
        echo "¡ERROR! La factura con este código ya existe.";
    }else{
    


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel/Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$worksheet = $objPHPExcel->getActiveSheet();

//Uniendo celdas - Merge Cells
$arrayMerges = array('E2:G6','A46:G46','A1:C2','A3:C3','A4:C4','A5:C5','A6:C6','A7:C7','B12:E12','F44:G44');

foreach ($arrayMerges as &$valor) {
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells($valor);
}

unset($valor);
/*
$objPHPExcel->setActiveSheetIndex(0)
            ->mergeCells('A46:G46')
            ->mergeCells('A1:C2')
            ->mergeCells('A3:C3')
            ->mergeCells('A4:C4')
            ->mergeCells('A5:C5')
            ->mergeCells('A6:C6')
            ->mergeCells('A7:C7')
            ->mergeCells('E2:G2')
            ->mergeCells('E3:G3')
            ->mergeCells('E4:G4')
            ->mergeCells('E5:G5')
            ->mergeCells('E6:G6')
            ->mergeCells('F10:G10')
            ->mergeCells('B12:E12')
            ->mergeCells('F44:G44');*/



//Añadiendo bordes - Adding borders
$borderArray = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);

$arrayBordes = array('E2:G6', 'A10:B10', 'C10:E10', 'F10:G10', 'A12', 'B12:E12', 'F12', 'G12', 'A13:A41', 'B13:E41', 'F13:F41', 'G13:G41');

foreach ($arrayBordes as &$valor) {
    $worksheet->getStyle($valor)->applyFromArray($borderArray);
}

unset($valor);

/*$worksheet->getStyle('E2:G6')->applyFromArray($borderArray);
$worksheet->getStyle('A10:B10')->applyFromArray($borderArray);
$worksheet->getStyle('C10:D10')->applyFromArray($borderArray);
$worksheet->getStyle('E10:G10')->applyFromArray($borderArray);
$worksheet->getStyle('A12')->applyFromArray($borderArray);
$worksheet->getStyle('B12:E12')->applyFromArray($borderArray);
$worksheet->getStyle('F12')->applyFromArray($borderArray);
$worksheet->getStyle('G12')->applyFromArray($borderArray);
$worksheet->getStyle('A13:A41')->applyFromArray($borderArray);
$worksheet->getStyle('B13:E41')->applyFromArray($borderArray);
$worksheet->getStyle('F13:F41')->applyFromArray($borderArray);
$worksheet->getStyle('G13:G41')->applyFromArray($borderArray);*/

unset($borderArray);

//Añadiendo lineas de puntos - Adding dotted lines
$worksheet->getStyle('A13:G41')->getBorders()->getHorizontal()->setBorderStyle(PHPExcel_Style_Border::BORDER_DOTTED);
$worksheet->getStyle('F44:G44')->getBorders()->getOutline()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);

/*$borderArray = array(
  'borders' => array(
    'horizontal' => array(
      'style' => PHPExcel_Style_Border::BORDER_DOTTED
    )
  )
);

$worksheet->getStyle('A13:G41')->applyFromArray($borderArray);

unset($borderArray);*/

//Cambiando tamaño de las celdas - Changing cells dimensions
$worksheet->getColumnDimension('A')->setWidth(11);
$worksheet->getColumnDimension('B')->setWidth(13);
$worksheet->getColumnDimension('C')->setWidth(11);
$worksheet->getColumnDimension('D')->setWidth(13);
$worksheet->getColumnDimension('E')->setWidth(13);
$worksheet->getColumnDimension('G')->setWidth(11);

$worksheet->getRowDimension(46)->setRowHeight(45);
//$worksheet->getRowDimension(46)->setRowHeight(-1);
//$excel->getActiveSheet()->getRowDimension($_row_number)->setRowHeight(-1);

//Centrando texto - Text alignement
$worksheet->getStyle('A1:A7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$worksheet->getStyle('A12:G12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$worksheet->getStyle('B2:G6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$worksheet->getStyle('A13:G41')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$worksheet->getStyle('F44')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$worksheet->getStyle('B10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$worksheet->getStyle('G10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$worksheet->getStyle('A10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$worksheet->getStyle('F10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$worksheet->getStyle('E10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$worksheet->getStyle('E44')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$worksheet->getStyle('E2:G6')->getAlignment()->setWrapText(true);
$worksheet->getStyle('A46')->getAlignment()->setWrapText(true);
$worksheet->getStyle('A13:G41')->getAlignment()->setWrapText(true);

//Cambiando tipo de letra, tamaño, ... - Changing letter type, size, ...
$worksheet->getStyle('A1')->getFont()->setName('Britannic Bold')->setSize(13)->setBold(true);
$worksheet->getStyle('A3')->getFont()->setName('Lucida Calligraphy')->setSize(10);
$worksheet->getStyle('A4:A7')->getFont()->setName('Palatino Linotype')->setSize(10);
$worksheet->getStyle('A12:G12')->getFont()->setName('Century')->setSize(10);

$worksheet->getStyle('A10')->getFont()->setName('Centaur')->setSize(10)->setBold(true)->setItalic(true);
$worksheet->getStyle('F10')->getFont()->setName('Centaur')->setSize(10)->setBold(true)->setItalic(true);
//$worksheet->getStyle('E10')->getFont()->setName('Centaur')->setSize(10)->setBold(true)->setItalic(true);

$worksheet->getStyle('A46')->getFont()->setName('Arial')->setSize(6); 

//Dando formato al texto - Formating text
$worksheet->getStyle('G10')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
$worksheet->getStyle('A13:A41')->getNumberFormat()->setFormatCode('0');
$worksheet->getStyle('F13:G41')->getNumberFormat()->setFormatCode('0.00€');
$worksheet->getStyle('A44')->getNumberFormat()->setFormatCode('0.00€');
$worksheet->getStyle('C44')->getNumberFormat()->setFormatCode('0.00€');
$worksheet->getStyle('F44')->getNumberFormat()->setFormatCode('0.00€');

//Añadiendo datos por defecto - Adding default data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'MANTENIMIENTO DEL HOGAR')
            ->setCellValue('A3', '******* **** *******')
            ->setCellValue('A4', 'Telf: *** *** ***  - *** *** ***')
            ->setCellValue('A5', '******* *****, ** ***** *******')
            ->setCellValue('A6', 'D.N.I **.***.***-*')
            ->setCellValue('A7', 'E-mail: *****.****@hotmail.com');

            if ($_POST['cli1'] == 1) {
                $cliente = $_POST['cliente1'];
                $inscli = $_POST['cliente1'];
                $existe = "FALSE";
            }else{
                $cli = explode('|', $_POST['cli1']);
                $cliente = $cli[0]."\n".$cli[1];
                $inscli = $cli[1];
                $existe = "TRUE";
            }

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('E2', $cliente)
            //->setCellValue('E3', $cli2)
            //->setCellValue('E4', $cli3)
            //->setCellValue('E5', $cli4)
            //->setCellValue('E6', $cli5)

            ->setCellValue('A10', 'Factura Nº: ')
            ->setCellValue('B10', $numero)
            /*->setCellValue('E10', 'Método de pago: ')
            ->setCellValue('F10', $pago)*/
            ->setCellValue('F10', 'Fecha: ')
            ->setCellValue('G10', $fecha)

            ->setCellValue('A12', 'Cantidad')
            ->setCellValue('B12', 'Concepto')
            ->setCellValue('F12', 'Precio')
            ->setCellValue('G12', 'Importe');

            $a = 1;
            for ($i=13; $i<=41; $i++){

                if (isset($_POST['cant'.$a])){
                    //${"cant".$a} = $_POST['cant'.$a];
                    //${"conc".$a} = $_POST['concepto'.$a];
                    //${"precio".$a} = $_POST['precio'.$a];
                    if ($_POST['conce'.$a] == 1) {
                        $concepto = $_POST['concepto'.$a];
                    }else{
                        $conc = explode('|', $_POST['conce'.$a]);
                        $concepto = $conc[0];
                    }
                    $concepto = trim(preg_replace('/\s\s+/', ' ', $concepto));
                    //$concepto = str_replace("\n"," ",$concepto);
                    $letras = strlen($concepto); //47

                    if ($letras > 47){
                        /*$z = $letras / 47;
                        $r = $letras % 47;
                        if ($z > 1 && $r != 0) {
                            $z++;
                        }*/



                        for ($t=1; $t<=30; $t++){
                            if ($letras > (47*$t)){
                                $s = $i + $t;
                            }
                        }

                        /*$rc = 0;
                        $line = explode(PHP_EOL, $concepto);
                        foreach($line as $source) {
                            for ($t=1; $t<=30; $t++){
                                if ($source > (47*$t)){
                                    $s = $i + $t;
                                }
                            }
                            $rc++;
                        }
                        $s = $i + $rc;*/

                        /*if ($letras > 47){
                            $s = $i + 1;
                            if ($letras > (47*2)){
                                $s++;
                                if ($letras > (47*3)){
                                    $s++;
                                    if ($letras > (47*4)){
                                        $s++;
                                        if ($letras > (47*5)){
                                            $s++;
                                            if ($letras > (47*6)){
                                                $s++;
                                                if ($letras > (47*7)){
                                                    $s++;
                                                    if ($letras > (47*8)){
                                                        $s++;
                                                        if ($letras > (47*9)){
                                                            $s++;
                                                            if ($letras > (47*10)){
                                                                $s++;
                                                                if ($letras > (47*11)){
                                                                    $s++;
                                                                    if ($letras > (47*12)){
                                                                        $s++;
                                                                        if ($letras > (47*13)){
                                                                            $s++;
                                                                            if ($letras > (47*14)){
                                                                                $s++;
                                                                                if ($letras > (47*15)){
                                                                                    $s++;
                                                                                    if ($letras > (47*16)){
                                                                                        $s++;
                                                                                        if ($letras > (47*17)){
                                                                                            $s++;
                                                                                            if ($letras > (47*18)){
                                                                                                $s++;
                                                                                                if ($letras > (47*19)){
                                                                                                    $s++;
                                                                                                    if ($letras > (47*20)){
                                                                                                        $s++;
                                                                                                        if ($letras > (47*21)){
                                                                                                            $s++;
                                                                                                            if ($letras > (47*22)){
                                                                                                                $s++;
                                                                                                                if ($letras > (47*23)){
                                                                                                                    $s++;
                                                                                                                    if ($letras > (47*24)){
                                                                                                                        $s++;
                                                                                                                        if ($letras > (47*25)){
                                                                                                                            $s++;
                                                                                                                            if ($letras > (47*26)){
                                                                                                                                $s++;
                                                                                                                                if ($letras > (47*27)){
                                                                                                                                    $s++;
                                                                                                                                    if ($letras > (47*28)){
                                                                                                                                        $s++;
                                                                                                                                        if ($letras > (47*29)){
                                                                                                                                            $s++;
                                                                                                                                            if ($letras > (47*30)){
                                                                                                                                                $s++;
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }                                                            
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }*/
                        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$i.':A'.$s);
                        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B'.$i.':E'.$s);
                        //$worksheet->getStyle('B'.$i)->getAlignment()->setWrapText(true);
                        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F'.$i.':F'.$s);
                        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G'.$i.':G'.$s);

                        $canti = $_POST['cant'.$a];
                        $preci = $_POST['precio'.$a];

                        $objPHPExcel->setActiveSheetIndex(0)
                                    ->setCellValue('A'.$i, $_POST['cant'.$a])
                                    ->setCellValue('B'.$i, '    '.$concepto)
                                    ->setCellValue('F'.$i, $_POST['precio'.$a]);
                        $insertcon = "INSERT INTO tener_f_c (concepto,cod_fac,cantidad,precio_u) VALUES ('$concepto',$numero,$canti,'$preci')";
                        mysql_query($insertcon);

                        $i++;
                    } elseif ($letras != 0) {
                        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B'.$i.':E'.$i);

                        $canti = $_POST['cant'.$a];
                        $preci = $_POST['precio'.$a];

                        $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, $_POST['cant'.$a])
                            ->setCellValue('B'.$i, '    '.$concepto)
                            ->setCellValue('F'.$i, $_POST['precio'.$a]);
                        $insertcon = "INSERT INTO tener_f_c (concepto,cod_fac,cantidad,precio_u) VALUES ('$concepto',$numero,$canti,'$preci')";
                        mysql_query($insertcon);
                    }
                }
                $a++;
            }            

            for ($i=13; $i<=41; $i++){
                $vaca = $worksheet->getCell('A'.$i)->getValue();
                $vacf = $worksheet->getCell('F'.$i)->getValue();
                if (($vaca!=0||$vaca!="")||($vacf!=0||$vacf!="")){
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, '=A'.$i.'*F'.$i);
                }
                /*$vacc = $worksheet->getCell('B'.$i)->getValue();
                if ($vacc==0||$vacc==""){
                    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B'.$i.':E'.$i);
                }*/
            }

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A43', 'Subtotal')
            ->setCellValue('A44', '=SUM(G13:G41)')
            ->setCellValue('C43', 'IVA '.$iva.'%')
            ->setCellValue('C44', '=A44*'.$iva.'%')
            ->setCellValue('E44', 'TOTAL:')
            ->setCellValue('F44', '=A44+C44')

            ->setCellValue('A46', 'De conformidad con la Ley Orgánica de Protección de Datos de Carácter Personal 15/1999, le recordamos que sus datos han sido incorporados en un fichero de datos de carácter personal del que es titular ******* **** *******, debidamente registrado ante la AEPD y cuya finalidad es de gestión de datos de clientes para tareas contable, fiscal y administrativas, Así mismo, le informamos que sus datos podrán ser cedidos, siempre protegiendo los datos adecuadamente, a: administración tributaria y bancos, cajas de ahorros y cajas rurales. Puede ejercitar sus derechos de Acceso, Rectificación, Cancelación y Oposición en ******* ** - *****, ******* (*********) o enviando un correo electrónico a *****.****@hotmail.com.');

//$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&6&ArialDe conformidad con la Ley Orgánica de Protección de Datos de Carácter Personal 15/1999, le recordamos que sus datos han sido incorporados en un fichero de datos de carácter personal del que es titular ******* **** *******, debidamente registrado ante la AEPD y cuya finalidad es de gestión de datos de clientes para tareas contable, fiscal y administrativas, Así mismo, le informamos que sus datos podrán ser cedidos, siempre protegiendo los datos adecuadamente, a: administración tributaria y bancos, cajas de ahorros y cajas rurales. Puede ejercitar sus derechos de Acceso, Rectificación, Cancelación y Oposición en ******* ** - *****, ******* (*********) o enviando un correo electrónico a *****.****@hotmail.com.');
// Rename worksheet
$worksheet->setTitle('Factura');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
//$objPHPExcel->setActiveSheetIndex(0);

// Save Excel 2007 file
//echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('C:\facturas/'.$numero.'.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
echo "La factura ".$numero.".xlsx se ha creado correctamente.";

//echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;

$insertfac = "INSERT INTO facturas (cod_fac,fecha,IVA,existe_cli,cliente) VALUES ($numero,'$insfecha',$iva,$existe,'$inscli')";
mysql_query($insertfac);
}

}




mysql_close($dp);
?>
</body>
</html>