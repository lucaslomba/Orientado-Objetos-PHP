<?php 

//Importanto arquivo
require_once("./src/Conta.php");

// $conta armazena o endereço de memória onde a nova Conta foi armazenada
$conta1 = new Conta();
$conta2 = new Conta();

//Atribui valores conta 1
$conta1->cpfTitular = '444.969.008-74';
$conta1->nomeTitular = 'Lucas';

//Atribui valores conta 2
$conta2->cpfTitular = '444.648.008-47';
$conta2->nomeTitular = 'João';


//Fazendo um saque na conta 1
$conta1->sacar(1000);

//Fazendo um deposito na conta 1
$conta1->depositar(1000);

//Fazendo transferencia
$conta1->transferir(6000, $conta2);


// Verifique que o objeto já possui os dados necessários de uma conta criada
var_dump($conta1);

// Verifique que o objeto já possui os dados necessários de uma conta criada
var_dump($conta2);