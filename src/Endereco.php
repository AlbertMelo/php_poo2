<?php

class Endereco
{

    private string $cidade;

    private string $rua;

    private string $bairro;

    private string $numero;

    public function __construct(string $cidade, string $rua, string $bairro, string $numero)
    {
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getNumero()
    {
        return $this->numero;
    }
}
