<?php
session_start();

$host = "localhost";
$username = "root";
$password = "Zeylindo1@";
$database = "projetodev"; 
$port = 3306;


$conn = new mysqli($host, $username, $password, $database, $port);


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


function verificarLogin($email, $senha) {
    global $conn;

  
    $stmt = $conn->prepare("SELECT senha FROM Registro WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($senhaHash);
    $stmt->fetch();

  
    if (password_verify($senha, $senhaHash)) {
        return true; 
    } else {
        return false; 
    }
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}




if (verificarLogin($email, $senha)) {

    $query = $conn->prepare("SELECT nome_usuario FROM Registro WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $query->bind_result($nomeDoUsuario);
    $query->fetch();


    $_SESSION['nomeUsuario'] = $nomeDoUsuario;


echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Login bem-sucedido. Redirecionando...</em></strong></div>';
echo '</body>';


echo '<script>
        setTimeout(function() {
            window.location.href = "logado.php";
        }, 3000);
      </script>';
} else {

echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Falha ao Logar. Tente novamente...</em></strong></div>';
echo '</body>';
echo '<script>
        setTimeout(function() {
            window.location.href = "login.html";
        }, 3000);
      </script>';
}
?>
