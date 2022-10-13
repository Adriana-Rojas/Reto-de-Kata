<?php


$ejeY = range(0, 3);

foreach ($ejeY as $y) {
    $xmaximo =  rand(0, 6);
    $ejeX = range(0, $xmaximo);
    // echo $ejeX;
    foreach ($ejeX as $x) {
        // Aquí creamos los ejes con un valor aleatorio
        $ejesYX[$y][$x] = rand(-10, 10);
    }
}

// Creamos la tabla
$html = '<table border>';
$html .= '<th></th>';

foreach ($ejesYX as $col_Y => $valores) {

    $html .= '<tr>';
    asort($valores);
    foreach ($valores as $val) {
        // Creamos los campos de los valores
        $html .= '<td>' . $val . '</td>';
    }
    
    //echo "<script>console.log('salto:' );</script>";
    $html .= '<td> --> </td>';
    foreach ($valores as $val) {
        // Creamos los campos de los valores
        $valorescuadrado = pow($val, 2);
        if($valorescuadrado>=66){
            $valorescuadrado='   ';
        }
        $html .= '<td>' . $valorescuadrado . '</td>';
    }
}

$html .= '</table>';
///

echo $html;
?>