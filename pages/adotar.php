<?php
include_once('../config.php');

// Consulta para obter somente os gatos disponíveis para adoção
$sql = "SELECT id, nome, sexo, foto FROM tb_gatos WHERE adotado = FALSE";
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
            <?php
            if ($result->num_rows > 0) {
                // Loop através dos resultados
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='box'>";
                    echo "<a href='gatos.php?id=" . htmlspecialchars($row["id"]) . "'>";
                    echo "<img src='" . htmlspecialchars($row['foto']) . "' alt='Foto de " . htmlspecialchars($row['nome']) . "'>";
                    echo "</a>";
                    echo "<img src='../assets/images/logo.png' alt='Logo' class='logo'>";
                    echo "</div>";
                }
            } else {
                echo "<li>Sem dados disponíveis.</li>";
            }

            ?>

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
                    <a href="cadastro_gatos.php" class="menu-button">Somente para Adminstradores</a>
                </div>
            </div>
        </div>
        <p class="copyright"><img src="../assets/images/copyright.png" alt="Copyright">2024 - Mansão dos Cats. Todos os
            direitos reservados.</p>
    </section>

</body>

</html>