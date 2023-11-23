<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Use o Composer para carregar as dependências automaticamente
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verifique se o método da requisição é POST e se o campo 'email' está definido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $codigoAleatorio = mt_rand(100000, 999999);

    // Insira os dados na tabela chamados
    $query = "INSERT INTO chamados (email, codigo_aleatorio, status) VALUES (?, ?, 'pendente')";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $email, $codigoAleatorio);
    $stmt->execute();

    $chamadoID = $conn->insert_id;

    // Configurações do SMTP
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('astrosteamtoken@gmail.com', 'Astrosteam Support');
    $mail->addAddress($email);

    $mail->Subject = 'Seu codigo de troca de senha';
    $mail->Body = 'Seu código é: ' . $codigoAleatorio;

    try {
        $mail->send();

        header("Location: confirmar.html");
        exit();
    } catch (Exception $e) {
        echo 'Erro no envio do e-mail: ', $mail->ErrorInfo;
    }
}
?>
