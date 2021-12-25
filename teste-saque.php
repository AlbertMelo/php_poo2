<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairro Teste', 'Rua l�', '37')
        )
    );

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();
