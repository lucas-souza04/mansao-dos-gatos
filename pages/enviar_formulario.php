<?php

$email_destino = "responsavel@ong.com";
$assunto = "Novo Formulário de Adoção Enviado";

// Coletar os dados do formulário
$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$email = $_POST['email'] ?? '';
$profissao = $_POST['profissao'] ?? '';
$cep = $_POST['cep'] ?? '';
$logradouro = $_POST['logradouro'] ?? '';
$numero = $_POST['numero'] ?? '';
$complemento = $_POST['complemento'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$concorda = $_POST['concorda'] ?? '';
$responsabilidade = $_POST['responsabilidade'] ?? '';
$motivo_adotar = $_POST['motivo-adotar'] ?? '';
$planejamento = $_POST['planejamento'] ?? '';
$responsavel_viagem = $_POST['responsavel-viagem'] ?? '';
$alergia_gatos = $_POST['alergia-gatos'] ?? '';
$alergia_filho = $_POST['alergia-filho'] ?? '';
$reacao_arranho = $_POST['reacao-arranho'] ?? '';
$gato_fugir = $_POST['gato-fugir'] ?? '';
$nao_cuidar = $_POST['nao-cuidar'] ?? '';
$motivos_devolver = $_POST['motivos-devolver'] ?? '';
$conheceu = $_POST['conheceu'] ?? '';

$mensagem = "
Nome: $nome
Telefone: $telefone
E-mail: $email
Profissão: $profissao
Endereço: $logradouro, $numero, $complemento - $bairro, $cidade, $cep

Já adotou antes? $concorda
Casa telada? $responsabilidade

Motivo para adotar: $motivo_adotar
Planejamento: $planejamento
Responsável durante viagens: $responsavel_viagem
Alergia a gatos: $alergia_gatos
Alergia de filho: $alergia_filho
Reação a arranhões: $reacao_arranho
Fugiu o gato: $gato_fugir
Não pode cuidar mais: $nao_cuidar
Motivos para devolução: $motivos_devolver
Como conheceu: $conheceu
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($email_destino, $assunto, $mensagem, $headers)) {
    echo "<script>alert('Formulário enviado com sucesso!'); window.location.href='adotar.php';</script>";
} else {
    echo "<script>alert('Erro ao enviar o formulário. Tente novamente.'); window.history.back();</script>";
}
?>
