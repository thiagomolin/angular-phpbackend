<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test";

$con = new mysqli("localhost:3306", "root", "", "test");

// Prepara o select. Limito para 3 resultado, para não encher a tela de autoajuda
$query = 'SELECT * FROM myDB';

if ($result = $con->query($query)) {

    /* percorre os resultados */
    while ($obj = $result->fetch_object()) {
        $json[] = array('id' => $obj->id, 'nome' => $obj->nome); 
    }

    $result->close();

    echo json_encode($json);
}

/* Fecha conexão */
$con->close();
?>