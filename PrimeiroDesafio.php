<?php

final class PrimeiroDesafio
{
    private $velocidade;
    private $valorMulta = 100;
    private $valorAPagar;

    // Porcentagem relacionada a cada velocidade
    private $multaAcima50 = 10;
    private $multaAcima60 = 15;
    private $multaAcima70 = 20;

    public function __construct($v)
    {
        $this->velocidade = $v;
    }

    public function calcularMulta()
    {
        if ($this->velocidade >= 50 AND $this->velocidade < 60) {
            $this->valorAPagar = $this->valorMulta + ($this->valorMulta * $this->multaAcima50 / 100);
        } elseif ($this->velocidade >= 60 AND $this->velocidade < 70){
            $this->valorAPagar = $this->valorMulta + ($this->valorMulta * $this->multaAcima60 / 100);
        } else {
            $this->valorAPagar = $this->valorMulta + ($this->valorMulta * $this->multaAcima70 / 100);
        }

        // Converte o valor para moeda brasileira
        $valorConvertido = "R$" . number_format($this->valorAPagar, '2', ',', '.');
        
        return $valorConvertido;
    }
}

?>
