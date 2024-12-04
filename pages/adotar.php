<?php
include_once('../config.php');

// Consulta para obter somente os gatos disponíveis para adoção
$sql = "SELECT * FROM tb_gatos WHERE adotado = FALSE";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../assets/styles/adotar.css">
</head>

<body>

    <?php include('../includes/header.php'); ?>

    <main>
        <div class="container">
            <div class="box">
                <a href="gatos.php?id=1">
                    <img src="../assets/images/gatos/Mingau.png" alt="Imagem 1">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=2">
                    <img src="../assets/images/gatos/Tigrao.png" alt="Imagem 2">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=3">
                    <img src="../assets/images/gatos/Luna.png" alt="Imagem 3">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=4">
                    <img src="../assets/images/gatos/Bella.png" alt="Imagem 4">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=5">
                    <img src="../assets/images/gatos/Mimi.png" alt="Imagem 5">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=6">
                    <img src="../assets/images/gatos/Pepper.png" alt="Imagem 6">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=7">
                    <img src="../assets/images/gatos/Shadow.png" alt="Imagem 7">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=8">
                    <img src="../assets/images/gatos/Nina.png" alt="Imagem 8">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=9">
                    <img src="../assets/images/gatos/Bento.png" alt="Imagem 9">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=10">
                    <img src="../assets/images/gatos/Malu.png" alt="Imagem 10">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=11">
                    <img src="../assets/images/gatos/Rex.png" alt="Imagem 11">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=12">
                    <img src="../assets/images/gatos/Flora.png" alt="Imagem 12">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
        </div>
    </main>

    <?php include('../includes/footer.php'); ?>

</body>

</html>