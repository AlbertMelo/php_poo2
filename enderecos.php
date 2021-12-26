<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
    );
$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
    );

echo $umEndereco . PHP_EOL;
echo $outroEndereco;