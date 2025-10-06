<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $conn->query("INSERT INTO alunos (nome) VALUES ('$nome')");
    header("Location: index.php");
}
?>
<form method="POST">
    Nome do aluno: <input type="text" name="nome" required>
    <button type="submit">Salvar</button>
</form>