<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arquiveshield";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailL"];
    $senha = $_POST["senhaL"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: home.html");
        exit();
    } else {
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }
}

$conn->close();
?>

