<?php 

//Importanto arquivo
require_once("./src/Conta.php");
require_once("./src/Titular.php");
require_once("./src/CPF.php");

// $conta armazena o endereço de memória onde a nova Conta foi armazenada
$conta1 = new Conta(new Titular('444.969.008-74', 'Lucas'));

//Fazendo um saque na conta 1
$conta1->sacar(1000);

//Fazendo um deposito na conta 1
$conta1->depositar(1000);

// Verifique que o objeto já possui os dados necessários de uma conta criada
var_dump($conta1);
