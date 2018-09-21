<?php

$conn = new PDO("pgsql:host=172.17.0.2;dbname=aula08", "aplicacao", "apl1010");

$stmt = $conn->prepare("UPDATE usuarios SET nome = :NOME, email= :EMAIL, senha = :SENHA where id= :ID");
$id = 1;
$nome = "Marcos Costa";
$email = 'marcos.costa@caritas.srv.br';
$senha = '654321';

$stmt->bindParam(":NOME", $nome);	
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados Alterados OK!";





