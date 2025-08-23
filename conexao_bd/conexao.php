<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "minha_base_dados";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    header("Location: index.html?status=erro&message=" . urlencode("Falha na conexão com o banco de dados."));
    exit;
}

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_de_nascimento'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, cpf, data_de_nascimento) VALUES (?, ?, ?)");

   
    $stmt->bind_param("sss", $nome, $cpf, $data_nascimento);


    if ($stmt->execute()) {
        header("Location: index.html?status=sucesso&message=" . urlencode("Dados cadastrados com sucesso!"));
        exit;
    } else {
        header("Location: index.html?status=erro&message=" . urlencode("Erro ao cadastrar: " . $stmt->error));
        exit;
    }

    $stmt->close(); 
} else {
    
    header("Location: index.html?status=erro&message=" . urlencode("Formulário não enviado. Por favor, preencha o formulário."));
    exit;
}

$conn->close();
?>