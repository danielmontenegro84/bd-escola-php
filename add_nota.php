<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_aluno = $_POST['id_aluno'];
    $nota = $_POST['nota'];
    $conn->query("INSERT INTO notas (id_aluno, nota) VALUES ($id_aluno, '$nota')");
    header("Location: notas.php?id=$id_aluno");
}
?>