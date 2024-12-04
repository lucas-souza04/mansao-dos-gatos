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

    <?php include('../includes/footer.php'); ?>

</body>

</html>