<?php

$conn = new PDO("pgsql:host=172.17.0.2;dbname=aula08", "aplicacao", "apl1010");

$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:NOME, :EMAIL, :SENHA)");

$nome = "Jose Alves";
$email = 'jose@hotmail.com';
$senha = '123456';

$stmt->bindParam(":NOME", $nome);	
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Inserido OK!";





