<?php

final class TerceiroDesafio
{
    private $caracteres;
    private $contador = 1;

    public function __construct($c)
    {
        $this->caracteres = $c;
    }

    public function remover()
    {
        while(strpos($this->caracteres, "AZ"))
        {
            $this->caracteres = str_replace("AZ", "", $this->caracteres);
            $this->contador++;
        }

        return "{$this->caracteres} - {$this->contador} frases";
    }
}

?>