<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Curitiba', 'Guilherme Pugsley St.', 'Agua Verde', '1188 apto 54');

$titular = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);

$primeiraConta = new Conta($titular);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$endereco2 = new Endereco('Manaus', 'Comendador Clementino Travss', 'Centro', '85');
$segundaConta = new Conta(new Titular(new CPF('698.549.548-10'), 'Patricia Silva', $endereco2));

var_dump($segundaConta);

// $outra = new Conta(new Titular(new CPF('123'), 'Abcdefg'));

echo Conta::recuperaNumeroDeContas();

?>