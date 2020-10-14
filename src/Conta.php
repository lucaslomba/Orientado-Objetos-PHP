<?php
// Nome do arquivo inicia com letra maiuscula

//Letra maiuscula por ser classe
class Conta
{
    //Definir dados conta
    private string $titular;
    private float $saldo;
    private static $numeroDeContas = 0;
    //Tipagem disponivel a partir do PHP 7.4


    // metodo construtor
    public function __construct(string $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    // metodo destrtor
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

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

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCPF();
    }
}