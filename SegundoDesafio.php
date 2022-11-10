<?php

final class SegundoDesafio
{
    private $X = [12, 5, 86, 3, 56, 25, 95, 14, 5];
    private $Y = [84, 24, 63, 74, 15, 7, 10];
    private $Z;

    public function ordenar()
    {
        // Faz a união dos arrays
        $this->Z = array_merge($this->X, $this->Y);

        // Ordena os itens do array de forma crescente
        asort($this->Z);

        return $this->Z;
    }

    public function contar()
    {
        return count($this->Z);
    }
}

?>