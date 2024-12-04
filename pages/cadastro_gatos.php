<?php
include('../config.php');


if (isset($_FILES['foto'])) {

  echo "arquivo reconhecido";

}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obtendo os dados do formulário
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $cor_pelo = $_POST['cor'];
  $cor_olhos = $_POST['olhos'];
  $tm_pelagem = $_POST['tipo_pelagem'];
  $dt_nasc_aprox =  $_POST['idade'];
  $dt_resgate =  $_POST['resgate'];
  $desc_detalhada = $_POST['desc'];
  $adotado = 0;

  // Verificando se o arquivo foi enviado
  if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    echo "arquivo reconhecido";
    $foto = $_FILES['foto'];
    $diretorio = '../assets/images/gatos/';
    $foto_nome = uniqid() . '_' . basename($foto['name']);
    $caminho_foto = $diretorio . $foto_nome;

    echo "$caminho_foto";

    // Criar o diretório se não existir
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0777, true);
    }
    // print_r($_POST);

    if (move_uploaded_file($foto['tmp_name'], $caminho_foto)) {
      
      $stmt = $conn->prepare("INSERT INTO tb_gatos (nome, sexo, cor_pelo, cor_olhos, tm_pelagem, dt_nasc_aprox, dt_resgate, desc_detalhada, foto, adotado) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
      // Verifica se a preparação da consulta foi bem-sucedida
      if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
      }
  
      // Faz o bind dos parâmetros
      $stmt->bind_param(
        "sssssssssb", // Ajuste os tipos conforme as colunas da sua tabela
        $nome,
        $sexo,
        $cor_pelo,
        $cor_olhos,
        $tm_pelagem,
        $dt_nasc_aprox,
        $dt_resgate,
        $desc_detalhada,
        $caminho_foto,
        $adotado
      );
  
      // Executa a consulta
      if ($stmt->execute()) {
        echo "Registro inserido com sucesso!";
      } else {
        echo "Erro ao inserir registro: " . $stmt->error;
      }
  
      $stmt->close();
    }
    // Inserindo os dados no banco de dados
    // Prepara a consulta
  }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Adoção</title>
  <link rel="stylesheet" href="../assets/styles/cadastro_gatos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Maitree:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yrsa:ital,wght@0,300..700;1,300..700&display=swap"
    rel="stylesheet">
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
  <br>
  <main>
    <div class="container">
      <h4>DADOS DO GATINHO</h4>
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Data de Nascimento Aproximado:</label>
        <input type="date" id="idade" name="idade" required><br><br>

        <label for="resgate">Data do Resgate:</label>
        <input type="date" id="resgate" name="resgate" required><br><br>

        <label for="cor">Cor do Pelo:</label>
        <input type="text" id="cor" name="cor" required><br><br>

        <label for="cor_olhos">Cor dos Olhos:</label>
        <input type="text" id="olhos" name="olhos" required><br><br>

        <label for="tipo_pelagem">Tipo da Pelagem:</label>
        <select id="tipo_pelagem" name="tipo_pelagem" required>
          <option value="" disabled selected>Selecione</option>
          <option value="Curta">Curta</option>
          <option value="Média">Média</option>
          <option value="Longa">Longa</option>
        </select><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
          <option value="" disabled selected>Selecione</option>
          <option value="macho">Macho</option>
          <option value="femea">Fêmea</option>
        </select><br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <label for="nome">Descrição detalhada:</label>
        <input type="text" id="desc" name="desc" required><br><br>
        <?php
        echo "<pre>";
        print_r($_FILES);
        print_r($_POST);
        echo "</pre>";
        ?>
        <button type="submit">Salvar</button>
      </form>
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
        <ul class="menu-buttons">
          <li><a href="ong.php" class="menu-button" aria-label="Saiba mais sobre a ONG">A ONG</a></li>
          <li><a href="adotar.php" class="menu-button" aria-label="Acesse o formulário para adoção">Quero adotar</a>
          </li>
          <li><a href="ajudar.php" class="menu-button" aria-label="Descubra como você pode ajudar">Quero ajudar</a></li>
        </ul>
      </div>
    </div>
    <p class="copyright"><img src="../assets/images/copyright.png" alt="Copyright" aria-hidden="true">2024 - Mansão dos
      Cats. Todos os direitos reservados.</p>
  </section>

</body>

</html>