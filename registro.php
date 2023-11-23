<?php
$host = "localhost";
$username = "root";
$password = "Zeylindo1@";
$database = "projetodev"; 
$port = 3306;


$conn = new mysqli($host, $username, $password, $database, $port);


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

function cadastrarUsuario($nomeUsuario, $email, $senha, $dataNascimento) {
    global $conn;


    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);


    $stmt = $conn->prepare("INSERT INTO Registro (nome_usuario, email, senha, data_nascimento, numero_celular) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nomeUsuario, $email, $senhaHash, $dataNascimento, $numeroCelular);

  
    if ($stmt->execute()) {
        return true; 
    } else {
        return false; 
    }
}

// Exemplo de uso para o registro
if (isset($_POST['registro'])) {
    $nomeUsuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dataNascimento = $_POST['data_nascimento'];
    
    if (cadastrarUsuario($nomeUsuario, $email, $senha, $dataNascimento)) {
        echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
        echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Registro bem-sucedido. Redirecionando...</em></strong></div>';
        echo '</body>';
        
        echo '<script>
                setTimeout(function() {
                    window.location.href = "login.html";
                }, 3000);
              </script>';
        } else {
        echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
        echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Falha ao Registrar. Tente novamente...</em></strong></div>';
        echo '</body>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "registro.html";
                }, 3000);
              </script>';
        }
        }
        ?>
