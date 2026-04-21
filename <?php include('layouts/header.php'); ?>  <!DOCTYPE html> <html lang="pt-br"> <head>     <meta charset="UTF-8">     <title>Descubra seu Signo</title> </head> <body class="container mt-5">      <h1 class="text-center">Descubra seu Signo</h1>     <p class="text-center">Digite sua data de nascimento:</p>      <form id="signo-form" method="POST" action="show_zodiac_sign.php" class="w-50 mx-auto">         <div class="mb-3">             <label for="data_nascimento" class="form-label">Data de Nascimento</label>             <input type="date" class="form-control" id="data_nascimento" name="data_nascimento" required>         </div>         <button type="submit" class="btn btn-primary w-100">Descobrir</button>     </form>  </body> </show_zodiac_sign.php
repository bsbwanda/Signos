<?php include('layouts/header.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Seu Signo</title>
</head>
<body class="container mt-5">

<?php
// Recebe a data do formulário
$data_nascimento = $_POST['data_nascimento'];

// Converte a data para formato dia/mês
$data_formatada = date("d/m", strtotime($data_nascimento));

// Carrega o arquivo XML
$signos = simplexml_load_file("signos.xml");

$signoEncontrado = null;

// Percorre todos os signos
foreach ($signos->signo as $signo) {
    $inicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
    $fim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
    $data = DateTime::createFromFormat('d/m', $data_formatada);

    // Ajuste para signos que passam de dezembro para janeiro
    if ($inicio > $fim) {
        if ($data >= $inicio || $data <= $fim) {
            $signoEncontrado = $signo;
            break;
        }
    } else {
        if ($data >= $inicio && $data <= $fim) {
            $signoEncontrado = $signo;
            break;
        }
    }
}

// Exibe o resultado
if ($signoEncontrado) {
    echo "<h1 class='text-center'>
