<?php
include 'conexao.php';

$sql = "SELECT
    COUNT(CASE WHEN qtd_contas > 300 THEN 1 END) AS maior300,
    COUNT(CASE WHEN qtd_contas <= 300 THEN 1 END) AS menor300
FROM
    enderecos";

$result = $db_conection->query($sql);
$row = $result->fetch_assoc();

$maior = $row['maior300'];
$menor = $row['menor300'];
?>