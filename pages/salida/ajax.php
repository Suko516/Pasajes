<?php
/*define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'ventas_tusolutionweb');*/
include('../layout/dbcon.php');
//$connexion = new mysqli("localhost", "root", "", "ventas_tusolutionweb");

$html = '';
$key = $_POST['key'];

$result = $con->query(
    'SELECT * FROM bus 
    WHERE  placa LIKE "%'.strip_tags($key).'%"'
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['placa']).'" id="cliente'.$row['id_bus'].'">'.utf8_encode($row['placa']).'</a></div>';
    }
}
echo $html;
?>