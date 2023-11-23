<?php
include("conexao.php");

function verificarCodigoEAtualizarSenha($novaSenha, $email) {
    global $conn;
    $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);

    $query = "UPDATE registro SET senha = ? WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $novaSenhaHash, $email);
    $stmt->execute();
    $stmt->close();

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $novaSenha = $_POST['nova_senha'];
    $confirmacaoSenha = $_POST['confirmacao_senha'];
    $email = $_POST['email'];

    if ($novaSenha == $confirmacaoSenha) {
        $sucesso = verificarCodigoEAtualizarSenha($novaSenha, $email);

        if ($sucesso) {
            echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
            echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Senha trocada com sucesso. Redirecionando...</em></strong></div>';
            echo '</body>';
            
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "login.html";
                    }, 3000);
                  </script>';
            } else {
            echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
            echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Falha ao Trocar. Tente novamente...</em></strong></div>';
            echo '</body>';
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "redefinir_senha.html";
                    }, 3000);
                  </script>';
                }
            } else {
                echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
                echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>As senhas não coincidem. Tente novamente...</em></strong></div>';
                echo '</body>';
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "redefinir_senha.html";
                        }, 3000);
                      </script>';
            }
        }

            
        
?>
