<?php
//REQUIRE AUTOLOAD

use App\Models\Company;

require_once __DIR__.'/vendor/autoload.php';

use App\Services\Web\Speedio;
$resultado = new Speedio;

$resultado = $resultado->consultarCNPJ('18036826000176');

if (empty($resultado)) {
    die('Problemas ao consultar cnpj');
}

if (isset($resultado->error)) {
    die($resultado->error);
}

echo '<pre>';
print_r($resultado);
echo '</pre>';
exit;

// $company = new Company();
// $company->csocialname = "qualquer coisa";

// echo '<pre>';
// print_r($company->__get($company->csocialname));
// echo '</pre>';
// exit;

//DIFINIR TITULO
define('TITLE', 'GENPED');

require_once __DIR__.'/app/Includes/header.php';
require_once __DIR__.'/app/Includes/login/login.php';
require_once __DIR__.'/app/Includes/footer.php';

