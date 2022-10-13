<?php


$ejeY = range(0, 6);

foreach ($ejeY as $y) {
    $xmaximo =  rand(0, 10);
    $ejeX = range(0, $xmaximo);
    // echo $ejeX;
    foreach ($ejeX as $x) {
        // Aquí creamos los ejes con un valor aleatorio
        $ejesYX[$y][$x] = rand(1, 100);
       
    }
}

// Creamos la tabla
$html = '<table border>';
$html .= '<th></th>';

foreach ($ejesYX as $col_Y => $valores) {

    $html .= '<tr>';

    foreach ($valores as $val) {
        // Creamos los campos de los valores
        $html .= '<td>' . $val . '</td>';
        $resultado = str_replace("6", " ", $val);
        echo "<script>console.log('ejesYX: " . $val . "' );</script>";
    }
    $reversed = array_reverse($valores);
    //echo "<script>console.log('salto:' );</script>";
    $html .= '<td> --> </td>';
    foreach ($reversed as $val) {
        // Creamos los campos de los valores
        $resultado = str_replace("6", " ", $val);
        $html .= '<td>' . $resultado . '</td>';
    }
   
}

$html .= '</table>';
///

echo $html;
?>