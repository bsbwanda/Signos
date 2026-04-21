<?php include('layouts/header.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Descubra seu Signo</title>
</head>
<body class="container mt-5">

    <h1 class="text-center">Descubra seu Signo</h1>
    <p class="text-center">Digite sua data de nascimento:</p>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Descobrir</button>
    </form>

</body>
</html>
