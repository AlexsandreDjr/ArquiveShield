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
    $email = $_POST["emailC"];
    $tipoConta = $_POST["tipoDeConta"];
    $nome = $_POST["nomeC"];
    $senha = $_POST["senhaC"];

    $sql = "INSERT INTO usuarios (email, tipo_conta, nome, senha) VALUES ('$email', '$tipoConta', '$nome', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        echo '<a href="index.html"><button type="button">Fazer login</button></a>';
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}

$conn->close();
?>