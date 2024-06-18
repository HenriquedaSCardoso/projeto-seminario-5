<?php
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/projeto-seminario-5');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto</title>
    <link rel="stylesheet" href='/projeto-seminario-5/app/styles/main.css'>
    <link rel="stylesheet" href='/projeto-seminario-5/app/styles/main_menu.css'>
</head>
<header>
    <span>Taxas: <strong>R$ 5 p/ 30 min</strong></span>
    <div class="line"></div>
    <span>Proprietários: <strong>10</strong></span>
    <div class="line"></div>
    <span>Veículos registrados: <strong>15</strong></span>
    <div class="line"></div>
    <span>Vagas livres: <strong>3</strong></span>
    <div class="line"></div>
    <span>Vagas ocupadas: <strong>7</strong></span>
</header>
<?php
$url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

if (preg_match('/^home$/', $url) === 1) {
    include(BASE_PATH . "/app/views/main_menu.php");
} else if (preg_match('/^(vehicles|owners|parking)\/list$/', $url) === 1) {
    include(BASE_PATH . "/app/views/data.php");
} else if (preg_match('/^(vehicles|owners|parking)\/create$/', $url) === 1) {
    include(BASE_PATH . "/app/views/data.php");
} else {
    include(BASE_PATH . "/app/views/not_found.php");
}
?>

</html>