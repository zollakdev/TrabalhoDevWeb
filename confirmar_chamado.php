<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];

    $query = "SELECT id FROM chamados WHERE codigo_aleatorio = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $codigo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Token Válido. Redirecionando...</em></strong></div>';
echo '</body>';

echo '<script>
        setTimeout(function() {
            window.location.href = "redefinir_senha.html";
        }, 3000);
      </script>';
} else {
echo '<body style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">';
echo '<div style="color: white; font-family: monospace; font-size: 70px; text-align: center; background: url(\'outerspace-6.gif\'); background-size: cover; height: 100%; width: 100%;"><strong><em>Token inválido. Tente novamente...</em></strong></div>';
echo '</body>';
echo '<script>
        setTimeout(function() {
            window.location.href = "confirmar.html";
        }, 3000);
      </script>';
}

    $stmt->close();
}
?>
