<?php
// Nome do arquivo inicia com letra maiuscula

//Letra maiuscula por ser classe
class Conta
{
    //Definir dados conta
    private string $cpfTitlar;
    private string $nomeTitular;
    private float $saldo = 0;
    //Tipagem disponivel a partir do PHP 7.4


    //Atribuindo métodos
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";

            // Early Return => Faz com que o else não seja necessario 
            return;
        } 
        
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";

            // Early Return => Faz com que o else não seja necessario
            return;
        } 
            
        $this->saldo += $valorADepositar;

    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if($valorTransferir > $this->saldo){
            echo "Saldo indisponível!";

            // Early Return => Faz com que o else não seja necessario 
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}