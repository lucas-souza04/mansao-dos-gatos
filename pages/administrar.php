<?php
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['deletar'])) {
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM tb_gatos WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "<p style='color: green;'>Gatinho deletado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao deletar: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } elseif (isset($_POST['atualizar_adotado'])) {
        $id = $_POST['id'];
        $adotado = $_POST['adotado'] == 1 ? 0 : 1; // Alternar entre 1 e 0
        $stmt = $conn->prepare("UPDATE tb_gatos SET adotado = ? WHERE id = ?");
        $stmt->bind_param("ii", $adotado, $id);
        if ($stmt->execute()) {
            echo "<p style='color: green;'>Status de adoção atualizado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao atualizar: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}

// Buscar todos os gatinhos do banco
$result = $conn->query("SELECT * FROM tb_gatos");

if ($result->num_rows > 0): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Gatinhos Cadastrados</title>
        <link rel="stylesheet" href="../assets/styles/administrar.css">
    </head>

    <body>
        <header>
            <div class="top-bar">
                <a href="../includes/logout.php">
                    <img src="../assets/images/logo.png" alt="Logo" class="logo">
                </a>
                <h2>
                    <a href="../includes/logout.php">www.mansaodoscats.org.br</a>
                </h2>

                <div class="social-icons">
                    <a href="https://www.instagram.com/mansaodoscats/" target="_blank"><img src="../assets/images/instagram.png"
                            alt="Instagram"></a>
                    <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank"><img
                            src="../assets/images/facebook.png" alt="Facebook"></a>
                    <a href="https://wa.me" target="_blank"><img src="../assets/images/whatsapp.png" alt="WhatsApp"></a>
                </div>
            </div>
        </header>
        <br>
        <main>
            <h1>Gatinhos Cadastrados</h1>
            <div class="grid">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="card">
                        <img src="<?php echo htmlspecialchars($row['foto']); ?>" alt="Foto de <?php echo htmlspecialchars(string: $row['nome']); ?>">
                        <ul>
                            <li><strong>Nome:</strong> <?php echo htmlspecialchars($row['nome']); ?></li>
                            <li><strong>Sexo:</strong> <?php echo htmlspecialchars($row['sexo']); ?></li>
                            <li><strong>Cor do Pelo:</strong> <?php echo htmlspecialchars($row['cor_pelo']); ?></li>
                            <li><strong>Cor dos Olhos:</strong> <?php echo htmlspecialchars($row['cor_olhos'] ?: 'Não informada'); ?></li>
                            <li><strong>Pelagem:</strong> <?php echo htmlspecialchars($row['tm_pelagem']); ?></li>
                            <li><strong>Data de Nascimento:</strong> <?php
                                                                        echo $row['dt_nasc_aprox'] ? date('d/m/Y', strtotime($row['dt_nasc_aprox'])) : 'Não informada';
                                                                        ?></li>
                            <li><strong>Data Aproximada do Resgate:</strong> <?php
                                                                                echo date('d/m/Y', strtotime($row['dt_resgate'])); ?></li>
                        </ul>

                        <!-- Formulário para alterar o status de "adotado" -->
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="adotado" value="<?php echo $row['adotado']; ?>">
                            <button type="submit" name="atualizar_adotado" class="btn">
                                <?php echo $row['adotado'] ? "Marcar como Não Adotado" : "Marcar como Adotado"; ?>
                            </button>
                        </form>

                        <!-- Formulário para deletar -->
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="deletar" class="btn-del">Deletar</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            </div>
        </main>
        <br>

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
                        <a href="cadastro_gatos.php" class="menu-button">Cadastro de gatos</a>
                    </div>
                </div>
            </div>
            <p class="copyright"><img src="../assets/images/copyright.png" alt="Copyright">2024 - Mansão dos Cats. Todos os
                direitos reservados.</p>
        </section>

    </body>

    </html>
<?php else: ?>
    <p>Nenhum gatinho encontrado.</p>
<?php endif;

$conn->close();
?>