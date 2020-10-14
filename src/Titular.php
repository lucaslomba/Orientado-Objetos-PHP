<?php

class Titular
{
    private CPF  $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->ValidaNomeTitular($nome)
    }

    public function recuperaCPF(): string
    {
        return $this->$cpf;
    }

    public function recuperaNome(): string
    {
        return $this->$nome;
    }

    private function ValidaNomeTitular(string $nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}