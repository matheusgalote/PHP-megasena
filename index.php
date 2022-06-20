<?php

// AUTOLOAD
require __DIR__.'/vendor/autoload.php';

use \App\Caixa\Loteria;

$concurso = $_GET['concurso'];

$res = Loteria::consultarResultado('megasena', $concurso);

include __DIR__.'/includes/header.php';
include isset($res['numero']) ? __DIR__.'/includes/result.php' : __DIR__.'/includes/error.php';
include __DIR__.'/includes/footer.php';
