

<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
require_once 'src/Endereco.php';

$endereco = new Endereco('Curitiba', 'Guilherme Pugsley St.', 'Agua Verde', '1188 apto 54');

$titular = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias',$endereco);

$primeiraConta = new Conta($titular);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new CPF('698.549.548-10'), 'Patricia', new Endereco('Manaus', 'Comendador Clementino Travss', 'Centro', '85')));

var_dump($segundaConta);

// $outra = new Conta(new Titular(new CPF('123'), 'Abcdefg'));

echo Conta::recuperaNumeroDeContas();

?>