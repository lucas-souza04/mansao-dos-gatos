<?php
include('../config.php');

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
    $foto = $_FILES['foto'];
    $diretorio = '../assets/images/gatos/';
    $foto_nome = uniqid() . '_' . basename($foto['name']);
    $caminho_foto = $diretorio . $foto_nome;


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

      if ($stmt->execute()) {
        // Redirecionar após o sucesso
        echo "<script>alert('Registro inserido com sucesso!');</script>";
        header("Location: {$_SERVER['PHP_SELF']}");
        exit(); // Garante que o restante do código não será executado
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
  <?php include('../includes/header.php'); ?>
  <br>
  <main>
    <div class="container">
      <h4>DADOS DO GATINHO</h4><br>
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do gatinho" required><br><br>

        <label for="idade">Data de Nascimento Aproximado:</label>
        <input type="date" id="idade" name="idade" required><br><br>

        <label for="resgate">Data do Resgate:</label>
        <input type="date" id="resgate" name="resgate" required><br><br>

        <label for="cor">Cor do Pelo:</label>
        <input type="text" id="cor" name="cor" placeholder="Digite a cor do pelo do gatinho" required><br><br>

        <label for="cor_olhos">Cor dos Olhos:</label>
        <input type="text" id="olhos" name="olhos" placeholder="Digite a cor dos olhos do gatinho" required><br><br>

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

        <label for="desc">Descrição detalhada:</label>
        <textarea id="desc" name="desc" placeholder="Descreva o gatinho" rows="4" required></textarea><br><br>
        <button type="submit">Salvar</button>
      </form>
    </div>

  </main>
  <br>
  <?php include('../includes/footer.php'); ?>
</body>

</html>