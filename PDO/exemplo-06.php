<?php

$conn = new PDO("pgsql:host=172.17.0.2;dbname=aula08", "aplicacao", "apl1010");

$conn->beginTransaction();


$stmt = $conn->prepare(" DELETE FROM usuarios WHERE id=?");
$id = 3;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();


echo "Dados Excluídos OK!";





