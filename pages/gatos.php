<?php
include 'config.php';

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
  <header>
    <div class="top-bar">
      <img src="../assets/images/logo.png" alt="Logo" class="logo">
      <h2>www.mansaodoscats.org.br</h2>
      <div class="social-icons">
        <a href="https://www.instagram.com/mansaodoscats/" target="_blank"><img src="../assets/images/instagram.png"></a>
        <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank"><img
            src="../assets/images/facebook.png"></a>
        <a href="https://wa.me/5511982590004" target="_blank"><img src="../assets/images/whatsapp.png"></a>
      </div>
    </div>
  </header>

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