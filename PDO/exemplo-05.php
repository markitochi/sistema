<?php

$conn = new PDO("pgsql:host=172.17.0.2;dbname=aula08", "aplicacao", "apl1010");

$stmt = $conn->prepare(" DELETE FROM usuarios WHERE id= :ID");
$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados Excluídos OK!";





