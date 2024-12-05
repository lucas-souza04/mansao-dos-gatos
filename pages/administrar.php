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
        <main>
        <h1>Gatinhos Cadastrados</h1>
        <div class="grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($row['foto']); ?>" alt="Foto de <?php echo htmlspecialchars(string: $row['nome']);?>">
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
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                        <button type="submit" name="deletar" class="btn-del">Deletar</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
        </main>
    </body>
    </html>
<?php else: ?>
    <p>Nenhum gatinho encontrado.</p>
<?php endif;

$conn->close();
?>
