<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $admin_username = 'admin'; // Nome do usuário padrão que terá acesso a página de cadastro de gatos
  $admin_password = 'senha-segura'; // Senha "forte"

  if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
    $_SESSION['admin_authenticated'] = true;
    header('Location: ../pages/cadastro_gatos.php');
    exit();
  } else {
    $error = "Credenciais inválidas!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/images/logo.png" />
  <title>Login para Administradores</title>
  <link rel="stylesheet" href="../assets/styles/admin_login.css">
</head>

<body>

  <?php include('../includes/header.php'); ?>

  <div class="form-container">
    <form method="POST">
      <input type="text" name="username" placeholder="Usuário" required>
      <input type="password" name="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>
  </div>
  <?php if (isset($error)) echo "<p>$error</p>"; ?>

  <?php include('../includes/footer.php'); ?>

</body>

</html>