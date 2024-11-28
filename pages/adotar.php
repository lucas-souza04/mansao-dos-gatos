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
    <header>
        <div class="top-bar">
            <a href="index.php">
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </a>
            <h2><a href="index.php">www.mansaodoscats.org.br</a></h2>
            <div class="social-icons">
                <a href="https://www.instagram.com/mansaodoscats/" target="_blank"><img src="../assets/images/instagram.png"
                        alt="Instagram"></a>
                <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank"><img
                        src="../assets/images/facebook.png" alt="Facebook"></a>
                <a href="https://wa.me" target="_blank"><img src="../assets/images/whatsapp.png" alt="WhatsApp"></a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="box">
                <a href="gatos.php?id=1">
                    <img src="../assets/images/gatos/imagem1.jpg" alt="Imagem 1">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=2">
                    <img src="../assets/images/gatos/imagem2.jpg" alt="Imagem 2">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=3">
                    <img src="../assets/images/gatos/imagem3.jpg" alt="Imagem 3">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=4">
                    <img src="../assets/images/gatos/imagem4.jpg" alt="Imagem 4">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=5">
                    <img src="../assets/images/gatos/imagem5.jpg" alt="Imagem 5">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=6">
                    <img src="../assets/images/gatos/imagem6.png" alt="Imagem 6">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=7">
                    <img src="../assets/images/gatos/imagem7.png" alt="Imagem 7">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=8">
                    <img src="../assets/images/gatos/imagem8.jpg" alt="Imagem 8">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=9">
                    <img src="../assets/images/gatos/imagem9.jpg" alt="Imagem 9">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=10">
                    <img src="../assets/images/gatos/imagem10.jpg" alt="Imagem 10">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=11">
                    <img src="../assets/images/gatos/imagem11.png" alt="Imagem 11">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="box">
                <a href="gatos.php?id=12">
                    <img src="../assets/images/gatos/imagem12.jpg" alt="Imagem 12">
                </a>
                <img src="../assets/images/logo.png" alt="Logo" class="logo">
            </div>
        </div>
    </main>


    <section class="info">
        <div class="top-section">
            <div class="text-section">
                <h2>Mansão dos Cats</h2>
                <div class="description">
                    <p>A Mansão dos Cats busca lares para gatos encontrados abandonados na Grande São Paulo<br>e
                        também trabalha para conscientizar as pessoas sobre a importância da castração e
                        posse<br>responsável. Também, resgata, trata, castra e doa gatinhos para lares seguros em
                        São Paulo.</p>
                </div>
            </div>
            <div class="menu-section">
                <h3>Menu</h3>
                <div class="menu-buttons">
                    <a href="ong.php" class="menu-button">A ONG</a>
                    <a href="adotar.php" class="menu-button">Quero adotar</a>
                    <a href="ajudar.php" class="menu-button">Quero ajudar</a>
                </div>
            </div>
        </div>
        <p class="copyright"><img src="../assets/images/copyright.png" alt="Copyright">2024 - Mansão dos Cats. Todos os
            direitos reservados.</p>
    </section>
</body>

</html>