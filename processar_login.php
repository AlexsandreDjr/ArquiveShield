<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archive_shield";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtenção dos dados do formulário de login
$email = $_POST['emailL'];
$senha = $_POST['senhaL'];

// Consulta SQL para verificar o login
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido, redirecionar para a página home.html
    header("Location: home.html");
} else {
    // Login inválido, redirecionar para uma página de erro ou exibir uma mensagem de erro
    echo "Login inválido";
}

$conn->close();
?>
