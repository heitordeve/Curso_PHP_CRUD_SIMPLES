<?php

$db_name = 'Nome do Banco';
$db_host = 'localhost';
$db_user = 'Usuário';
$db_password = 'Senha';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password);