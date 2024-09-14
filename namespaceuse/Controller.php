<?php

use namespaceuse\model\Registro;

require 'model/Registro.php';
require 'logica/Registro.php';

$registro = new Registro;

echo $registro->save();