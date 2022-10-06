<?php

include('../layout/dbcon.php');


$html = '';
$key = $_POST['key'];

$result = $con->query(
    'SELECT * FROM conductor 
    WHERE  nombre LIKE "%'.strip_tags($key).'%"'
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['nombre']).'" id="cliente'.$row['id_conductor'].'">'.utf8_encode($row['nombre']).'</a></div>';
    }
}
echo $html;
?>