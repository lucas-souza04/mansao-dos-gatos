<?php
include('../config.php');

// Verifica se o ID foi enviado pela URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = intval($_GET['id']); // Converte para inteiro para segurança
} else {
  echo "Nenhum gato selecionado.";
  exit;
}

if ($id) {
  // Consulta as informações dos gatos no banco de dados
  $stmt = $conn->prepare("SELECT * FROM tb_gatos WHERE id = ?");
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $gato = $result->fetch_assoc();
  } else {
    echo "Gato não encontrado.";
    exit;
  }
} else {
  echo "Nenhum gato selecionado.";
  exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações de - <?php echo htmlspecialchars($gato['nome']); ?></title>
  <link rel="stylesheet" href="../assets/styles/gatos.css">
</head>

<body>

  <?php include('../includes/header.php'); ?>

  <h1>Sobre <?php echo htmlspecialchars($gato['nome']); ?></h1>

  <main>
    <!-- Exibe a foto do gato -->
    <?php if (!empty($gato['foto'])): ?>
      <img src="<?php echo htmlspecialchars($gato['foto']); ?>" alt="Foto de <?php echo htmlspecialchars($gato['nome']); ?>">
    <?php else: ?>
      <p>Foto não disponível.</p>
    <?php endif; ?>

    <ul>
      <li><strong>Sexo:</strong> <?php echo htmlspecialchars($gato['sexo']); ?></li>
      <li><strong>Cor do Pelo:</strong> <?php echo htmlspecialchars($gato['cor_pelo']); ?></li>
      <li><strong>Cor dos Olhos:</strong> <?php echo htmlspecialchars($gato['cor_olhos'] ?: 'Não informada'); ?></li>
      <li><strong>Pelagem:</strong> <?php echo htmlspecialchars($gato['tm_pelagem']); ?></li>
      <li><strong>Data de Nascimento:</strong> <?php
                                                echo $gato['dt_nasc_aprox'] ? date('d/m/Y', strtotime($gato['dt_nasc_aprox'])) : 'Não informada';
                                                ?></li>
      <li><strong>Data Aproximada do Resgate:</strong> <?php
                                                        echo date('d/m/Y', strtotime($gato['dt_resgate']));
                                                        ?></li>
    </ul>
    <div>
      <h2>Descrição</h2>
      <p><?php echo nl2br(htmlspecialchars($gato['desc_detalhada'])); ?></p>
    </div>
    <div class="interesse">
      <form action="formulario.php" method="POST">
        <input type="hidden" name="gato_id" value="<?php echo htmlspecialchars($gato['id']); ?>">
        <button type="submit" class="btn-interesse" onclick="location.href='formulario.php'">TENHO INTERESSE</button>
      </form>
    </div>
  </main>

  <?php include('../includes/footer.php'); ?>

</body>

</html>