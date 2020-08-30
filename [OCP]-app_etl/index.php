<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/files');
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';